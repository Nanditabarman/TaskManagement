<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bootstrap 5 - Login Form</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
</head>
<body>
  <div class="form-body">
    <div class="row">
      <div class="form-holder">
        <div class="form-content">
          <div class="form-items">
            <h3>Register Today</h3>
            <form action="add" method="POST">
              @csrf <!-- CSRF token -->

              <div class="col-md-12">
                <input class="form-control" type="text" name="name" placeholder="Full Name" value="{{old ('name') }}" required>
              </div>
              <div class="col-md-12">
                <input class="form-control" type="email" name="email" placeholder="E-mail Address" value="{{old ('email') }}" required>
                @if($errors->has('email'))
               <p class="text-danger">{{ $errors->first('email') }}</p>
              @endif
              </div>
              <div class="col-md-12">
                <input class="form-control" type="password" name="password" placeholder="Password"  required>
            </div>
            <div class="col-md-12">
            <input class="form-control" type="password" name="password_confirmation" placeholder="Password confirmation" required>
            @if($errors->has('password'))
               <p class="text-danger">{{ $errors->first('password') }}</p>
              @endif
        </div>
            <div class="col-md-12">
                <input class="form-control" type="text" name="phone_number" placeholder="Phone number" value="{{old ('phone_number') }}" required>
               @if($errors->has('phone_number'))
               <p class="text-danger">{{ $errors->first('phone_number') }}</p>
              @endif
            </div>
              <div class="btns">
                <button id="submit" type="submit" class="btn bg-light ">Register</button>
                <button id="button" type="button" class="btn bg-light" ><a class=" text-decoration-none" href="/login">Login</a></button>
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


*, body {
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    -webkit-font-smoothing: antialiased;
    text-rendering: optimizeLegibility;
    -moz-osx-font-smoothing: grayscale;
}
.btns{
    margin-top:10px;
    justify-content: center;
    display: flex;
}
.btns button{
    margin:0px 20px;
    padding:10px;
    font-size: 17px;
    font-weight: 400;
}
html, body {
    height: 100%;
    background-color: #152733;
    overflow: hidden;
}
p{
    background-color: red;
    color:white;
}

.form-holder {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      min-height: 100vh;
}

.form-holder .form-content {
    position: relative;
    text-align: center;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-align-items: center;
    align-items: center;
    padding: 60px;
}

.form-content .form-items {
    border: 3px solid #fff;
    padding: 40px;
    display: inline-block;
    width: 100%;
    min-width: 540px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
    text-align: left;
    -webkit-transition: all 0.4s ease;
    transition: all 0.4s ease;
}

.form-content h3 {
    color: #fff;
    text-align: left;
    font-size: 28px;
    font-weight: 600;
    margin-bottom: 5px;
}

.form-content h3.form-title {
    margin-bottom: 30px;
}

.form-content p {
    color: #fff;
    text-align: left;
    font-size: 17px;
    font-weight: 300;
    line-height: 20px;
    margin-bottom: 30px;
}


.form-content label, .was-validated .form-check-input:invalid~.form-check-label, .was-validated .form-check-input:valid~.form-check-label{
    color: #fff;
}

.form-content input[type=text], .form-content input[type=password], .form-content input[type=email], .form-content select {
    width: 100%;
    padding: 9px 20px;
    text-align: left;
    border: 0;
    outline: 0;
    border-radius: 6px;
    background-color: #fff;
    font-size: 15px;
    font-weight: 300;
    color: #8D8D8D;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    margin-top: 16px;
}

.btn-primary:hover, .btn-primary:focus, .btn-primary:active{
    background-color: #495056;
    outline: none !important;
    border: none !important;
     box-shadow: none;
}

.form-content textarea {
    position: static !important;
    width: 100%;
    padding: 8px 20px;
    border-radius: 6px;
    text-align: left;
    background-color: #fff;
    border: 0;
    font-size: 15px;
    font-weight: 300;
    color: #8D8D8D;
    outline: none;
    resize: none;
    height: 120px;
    -webkit-transition: none;
    transition: none;
    margin-bottom: 14px;
}

.form-content textarea:hover, .form-content textarea:focus {
    border: 0;
    background-color: #ebeff8;
    color: #8D8D8D;
}

.mv-up{
    margin-top: -9px !important;
    margin-bottom: 8px !important;
}

.invalid-feedback{
    color: #ff606e;
}

.valid-feedback{
   color: #2acc80;
}
    </style>
