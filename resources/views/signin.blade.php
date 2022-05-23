<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>RANK UP P. 2 | Signin</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/signin.css') }}">
</head>
<body>
  <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="{{ asset('img/login_pdn4.png') }}"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form action="/signin" method="POST">
            <label class="form-label" for="email">Email</label>
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email"  name="email" class="form-control form-control-lg"
                placeholder="Enter an email" /required>
              
            </div>
            
            <label class="form-label" for="password">Password</label>
            <!-- Password input -->
            <div class="form-outline mb-3">
              <input type="password" name="password" class="form-control form-control-lg"
                placeholder="Enter password" /required>
              
            </div>
  
            <div class="d-flex justify-content-between align-items-center">
              <!-- Checkbox -->
              <div class="form-check mb-0">
                <input class="form-check-input me-2" name="remember_me" type="checkbox" value="" id="remember_me" />
                <label class="form-check-label" for="remember_me">
                  Remember me
                </label>
              </div>
              </div>
              &nbsp;
              @if(Session::has('status'))
                  <div class="alert alert-danger">
                         {{ Session::get('status') }}
                  </div>
               @endif
               @csrf
            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" class="btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem; background-color:#6C63FF; display: block;">Login</button>
            </div>
  
          </form>
        </div>
      </div>
    </div>
    @include('layouts.footer')
  </section>
</body>
</html>