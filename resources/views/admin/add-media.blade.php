@include('admin/nav-header')
    <form class="row justify-content-center my-5 add-media" method="POST" action="{{url('/admin/upload-media')}}/" enctype="multipart/form-data">
        <div class="col-md-7 shadow bg-white">
            @if (session()->has('image_upload'))
                <p class="fw-bold text-success">{{session('image_upload')}}</p>
            @endif
            @csrf
            <div class="form-group">
                <input type="file" name="files[]" id="" class="form-control shadow-none" multiple required>
            </div>
            <div class="form-group mt-4">
                <button type="submit" class="btn btn-brand w-100">+Add Media</button>
            </div>
        </div>
    </form>
@include('admin/nav-footer')