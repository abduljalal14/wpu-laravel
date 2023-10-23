@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-5">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
        @endif
        <main class="form-signin">
            <h1 class="h3 mb-3 font-weight-normal text-center">Please Login</h1>
            <form >
                <div class="form-floating">
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                </div>
                
                <div class="form-floating">
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                </div>
               
                <button class="w-100 btn btn-lg btn-primary btn-block" type="submit">Login</button>
              </form>
              <small class="d-block mt-3 text-center">Not registered? <a href="/register">Register Now!</a></small>
        </main>
    </div>
</div>

        

@endsection