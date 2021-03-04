@extends('cms.cms_master')
@section('cms_content')
<div class="row">
    <div class="col-md-12">
        <h3>Are you sure for deleting this item? </h3>
    </div>

</div>
<div class="row">
    <div class="col-md-6">
        <form action="{{ url('cms/products/' . $id) }}" method="POST" novalidate>
            {{ csrf_field() }}
            {{method_field('DELETE')}}

            <a href="{{ url('cms/products') }}" type="button" name="cencel" class="btn btn-secondary">Cencel</a>
            <button type="submit" name="submit" class="btn btn-danger">Delete</button>

        </form>
    </div>
</div>
@endsection