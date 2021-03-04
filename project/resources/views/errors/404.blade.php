<?php

$title = 'Melamed | 404 page';
$menu = App\Models\Menu::all()->toArray();

?>
@extends('master')
@section('main_content')
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-warning" role="alert">
            <h3>OOPS! The Page is not found</h3>
            <p>ERROR 404</p>
        </div>

    </div>
</div>
@endsection
