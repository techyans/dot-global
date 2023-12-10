<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Media_Model;
use Illuminate\Support\Facades\Session;

class Media_Controller extends Controller
{
    public function upload_media(request $req){
        foreach ($req->file('files') as $image) {
            // Generate a unique name for each image
            $file=$image->getClientOriginalname();
            $file_name = pathinfo($file, PATHINFO_FILENAME);
            $file_ext = pathinfo($file, PATHINFO_EXTENSION);
            $final_file_name=date("Ymd-His").'-'.rand(111111,999999).'-'.$file;

            if($image->storeAs('images', $final_file_name, 'public')){
                $save_media= new Media_Model;
                $save_media->media_name=$final_file_name;
                $save_media->added_by=session('admin_login')['email'];
                $save_media->save();
                Session::flash('image_upload','Images uploaded successfully');
            }
        }
        return redirect()->route('admin.addmedia');
    }

    public function show_all_media(request $req){
        $search = $req->query('search');

        $data = Media_Model::when($search, function ($query) use ($search) {
            $query->where('media_name', 'like', '%'.$search.'%');
        })->orderBy('id', 'desc')->paginate(72);
        return view('admin/all-media', ['data' => $data, 'search' => $search]);
    }

    public function view_media_details(request $req){
        $details = Media_Model::where('id', $req->view_img_id)->get()->toArray();
        if(count($details)>0){
            $image = url('/').'/storage/images/'.$details[0]['media_name'];

            $image_details = 'storage/images/'.$details[0]['media_name'];
            list($width, $height, $type, $attr) = getimagesize($image_details);
            $size = round(filesize($image_details)/ 1024, 2);
            $extension = pathinfo($image_details, PATHINFO_EXTENSION);
            $created_at = strtotime($details[0]['created_at']);
            $updated_at = strtotime($details[0]['updated_at']);
            
            ?>
                <div class="row media-details">
                    <div class="col-md-7 border-end">
                        <img src="<?php echo $image; ?>" alt="" class="w-100">
                    </div>
                    <div class="col-md-5">
                        <p>File Name: <?php echo $details[0]['media_name'];?></p>
                        <p>Added By: <?php echo $details[0]['added_by'];?></p>
                        <p>Added Date: <?php echo date('Y-m-d H:i:s',$created_at); ?></p>
                        <p>File Type: <strong><?php echo $extension;?></strong></p>
                        <p>Dimensions: <strong><?php echo $width.'w x '.$height;?>h</strong></p>
                        <p>File Size: 
                            <strong>
                                <?php
                                    if($size<1024){
                                        echo $size.'KB';
                                    }else{
                                        echo ($size/1024).'MB';
                                    }
                                ?>
                            </strong>
                        </p>
                        <p>Last Update By: <?php echo $details[0]['update_by'];?></p>
                        <p>Last Update Date: <?php echo date('Y-m-d H:i:s',$updated_at);?></p>
                        <div class="pt-3">
                            <input type="text" class="form-control shadow-none bg-light image-path" value="<?php echo $image;?>" readonly>
                            <span role="button" class="text-success fw-bold copy-image-path">Copy Image Path</span>
                        </div>
                        <div class="pt-3">
                            <label for="" class="fw-bold">Alt Text</label>
                            <input type="text" class="form-control shadow-none media-alt-text" value="<?php echo $details[0]['alt_text'];?>">
                        </div>
                        <div class="pt-3">
                            <label for="" class="fw-bold">Media Caption</label>
                            <textarea name="" rows="3" class="form-control shadow-none media-caption"><?php echo $details[0]['caption']?></textarea>
                        </div>
                        <div class="pt-3">
                            <span role="button" class="text-danger fw-bold me-5 delete-image" data-media_id=<?php echo $req->view_img_id;?>>Delete Permanently</span>

                            <span role="button" class="text-success fw-bold update-image-details" data-media_id=<?php echo $req->view_img_id;?>>Update Details</span>
                        </div>
                        <div class="media-result-response"></div>
                    </div>
                </div>
            <?php
        }
    }

    public function update_media_details(request $req){
        $id=$req->upd_media_id;
        $media_alt_text=$req->media_alt_text;
        $media_caption=$req->media_caption;
        $update_by=session('admin_login')['email'];
        $update_date=date('Y-m-d H:i:s');

        $upd_media = Media_Model::where('id',$id)->update(['alt_text' => $media_alt_text,'caption' => $media_caption,'update_by' => $update_by, 'updated_at' => $update_date]);
        return "<span class='text-success fw-bold'>Media Details Successfully Updated</span>";
    }
    
    public function delete_media(request $req){
        $media_detelet_id = $req->delete_media_id;
        $delet_media=Media_Model::where('id',$media_detelet_id)->delete();
        ?>
            <h4 class="text-center py-5 text-success">Media Successfuly Deleted</h4>
        <?php
    }
}
