@extends('master')
@section('main_content')
<div class="row">
    <div class="col-md-12">
        <h1>Add a new menu link - </h1>
    </div>

</div>
<div class="row">
    <div class="col-md-6">
        <form action="{{ url('cms/menu') }}" method="POST" novalidate>
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="link" class="form-label">Link:</label>
                <input type="text" name="link" placeholder="Link" value="{{ old('link') }}"
                    class="form-control origin_text" id="link">
                <span class="text-danger">{{$errors->first('link')}}</span>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="menu_title" placeholder="Title" value="{{ old('menu_title') }}"
                    class="form-control" id="title">
                <span class="text-danger">{{$errors->first('menu_title')}}</span>
            </div>
            <div class="mb-3">
                <label for="url" class="form-label">Url</label>
                <input type="text" name="url" placeholder="url" value="{{ old('url') }}"
                    class="form-control target_text" id="url">
                <span class="text-danger">{{$errors->first('url')}}</span>
            </div>


            <a href="{{ url('cms/menu') }}" type="button" name="cencel" class="btn btn-secondary">Cencel</a>
            <button type="submit" name="submit" class="btn btn-primary">Save</button>

        </form>
    </div>
</div>
@endsection