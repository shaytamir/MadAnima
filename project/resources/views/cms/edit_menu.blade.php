@extends('cms.cms_master')
@section('cms_content')
<div class="row">
    <div class="col-md-12">
        <h1>Edit this item - </h1>
    </div>

</div>
<div class="row">
    <div class="col-md-6">
        <form action="{{ url('cms/menu/' . $menu['id']) }}" method="POST" novalidate>
            {{ csrf_field() }}
            {{method_field('PUT')}}
            <input type="hidden" name="item_id" value="{{$menu['id']}}">


            <div class="mb-3">
                <label for="link" class="form-label">Link:</label>
                <input type="text" name="link" placeholder="Link" value="{{ $menu['link'] }}"
                    class="form-control origin_text" id="link">
                <span class="text-danger">{{$errors->first('link')}}</span>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="menu_title" placeholder="Title" value="{{ $menu['menu_title'] }}"
                    class="form-control" id="title">
                <span class="text-danger">{{$errors->first('menu_title')}}</span>
            </div>
            <div class="mb-3">
                <label for="url" class="form-label">Url</label>
                <input type="text" name="url" placeholder="url" value="{{ $menu['url'] }}"
                    class="form-control target_text" id="url">
                <span class="text-danger">{{$errors->first('url')}}</span>
            </div>


            <a href="{{ url('cms/menu') }}" type="button" name="cencel" class="btn btn-secondary">Cencel</a>
            <button type="submit" name="submit" class="btn btn-primary">Update</button>

        </form>
    </div>
</div>
@endsection
