@extends('master')
@section('main_content')
<div class="row">
    <div class="col-md-12">
        <h1>sign up your new account</h1>
    </div>

</div>
<div class="row">
    <div class="col-md-6">
        <form action="" method="POST" novalidate>
            {{ csrf_field() }}




            <div class="mb-3">
                <label for="name" class="form-label">Name address</label>
                <input type="name" name="name" placeholder="Name" value="{{ old('name') }}" class="form-control"
                    id="name">
                <span class="text-danger">{{$errors->first('name')}}</span>
            </div>
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
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control"
                    id="password_confirmation">
                <span class="text-danger">{{$errors->first('password_confirmation')}}</span>
            </div>



            <button type="submit" name="submit" class="btn btn-primary">Signin</button>

        </form>
    </div>
</div>

@endsection