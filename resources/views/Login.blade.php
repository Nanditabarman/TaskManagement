<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bootstrap 5 - Login Form</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
</head>

<body class="main-bg">
  <!-- Login Form -->
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card shadow">
          <div class="card-title text-center border-bottom">
            <h2 class="p-3">Login</h2>
          </div>
          <div class="card-body">
          <form action="login" method="POST">
          @csrf
              <div class="mb-4">
              <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" value="{{old ('email') }}" />
              </div>
              <div class="mb-4">
              <input type="password" class="form-control" id="password" name="password" placeholder="Your Password" />
            </div>
            <div class="mb-4">
            <input class="form-control" type="password" name="password_confirmation" placeholder="Password confirmation"  required>
            @if($errors->has('password'))
               <p class="text-danger">{{ $errors->first('password') }}</p>
              @endif
        </div>
              <div class="btns">
                <button id="button" type="button" class="btn bg-dark"><a class="text-decoration-none text-white" href="/">Register</a></button>
                <button id="submit" type="submit" class="btn bg-dark text-white" >Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
<style>
html, body {
    height: 100%;
    background-color: #152733;
    overflow: hidden;
}

.main-bg {
  background: var(--main-bg) !important;
}

input:focus, button:focus {
  border: 1px solid var(--main-bg) !important;
  box-shadow: none !important;
}

.form-check-input:checked {
  background-color: var(--main-bg) !important;
  border-color: var(--main-bg) !important;
}

.card, .btn, input{
  border-radius:0 !important;
}

    </style>
