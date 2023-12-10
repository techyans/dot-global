@include('admin/nav-header')

<div class="row bg-white media-all-page">
    <div class="col-12">
        <div class="row justify-content-end pt-3">
            <div class="col-12 col-md-6 col-lg-4">
                <form action="{{url('/admin/all-media')}}/" method="GET">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control shadow-none" name="search" value="{{ $search }}" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button type="submit" class="btn btn-brand" type="button" id="button-addon2">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12 all-media">
        <div class="row">
            @foreach($data as $item)
                <div class="col-6 col-md-3 col-lg-2">
                    <div class="image border rounded">
                        <img src="{{asset('storage/images/'.$item->media_name)}}" alt="" class="w-100 rounded" data-view_imgid="{{$item->id}}">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="col-12">
        <div class="cs-pagination">
            {{ $data->links() }} <!-- Display pagination links -->
        </div>
    </div>
</div>

@include('admin/nav-footer')