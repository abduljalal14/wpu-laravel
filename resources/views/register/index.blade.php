@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration">
            <h1 class="h3 mb-3 font-weight-normal text-center">Registration Form</h1>
            <form action="/register" method="post">
                @csrf
                <div class="form-floating">
                    <input type="text" name="name" id="name" class="form-control rounded-top" placeholder="Name" required autofocus>
                    <label for="name">Name</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="username" id="username" class="form-control" placeholder="Username" required autofocus>
                    <label for="username">Username</label>
                </div>
                <div class="form-floating">
                    <input type="email" id="email" class="form-control" placeholder="Email address" required autofocus>
                    <label for="email">Email Address</label>
                </div> 
                <div class="form-floating">
                    <input type="password" name="password" id="password" class="form-control rounded-bottom" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>
                
                
                <button class="w-100 btn btn-lg btn-primary btn-block mt-4" type="submit">Register</button>
              </form>
              <small class="d-block mt-3 text-center">Already registered? <a href="/login">Login</a></small>
        </main>
    </div>
</div>

        

@endsection