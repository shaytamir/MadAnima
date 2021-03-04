@extends('master')
@section('main_content')
<div class="row">
    <div class="col-md-12">
        <h1>sign in your account</h1>
    </div>

</div>
<div class="row">
    <div class="col-md-6">
        <form action="" method="POST" novalidate>
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" class="form-control"
                    id="email" aria-describedby="emailHelp">
                <span class="text-danger">{{$errors->first('email')}}</span>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" placeholder="Password" class="form-control" id="password">
                <span class="text-danger">{{$errors->first('password')}}</span>

            </div>
            <!-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
            <button type="submit" name="submit" class="btn btn-primary">Signin</button>

        </form>
    </div>
</div>
@endsection