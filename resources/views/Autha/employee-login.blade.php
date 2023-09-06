



<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>R.A.D.E.E.S</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Stylesheet-->
    <style media="screen">
    /* Google Font Link */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins" , sans-serif;
    }
    html{
        height:100%;
    }
    body{
    /* min-height: 100vh; */
    display: flex;
    align-items: center;
    justify-content: center;
    background: #2a36e8;
    /* padding: 30px; */
    }
    .container{
    position: relative;
    /* max-width: 850px; */
    height: 100%;
    width: 100%;
    background: #fff;
    padding: 146px 30px;
    box-shadow: 0 5px 10px rgba(0,0,0,0.2);
    perspective: 2700px;
    }
    .container .cover{
    position: absolute;
    top: 0;
    left: 50%;
    height: 100%;
    width: 50%;
    z-index: 98;
    transition: all 1s ease;
    transform-origin: left;
    transform-style: preserve-3d;
    }
    .container #flip:checked ~ .cover{
    transform: rotateY(-180deg);
    }
    .container .cover .front,
    .container .cover .back{
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    }
    .cover .back{
    transform: rotateY(180deg);
    backface-visibility: hidden;
    }
    .container .cover::before,
    .container .cover::after{
    content: '';
    position: absolute;
    height: 100%;
    width: 100%;
    background: #2a36e8;
    opacity: 0.5;
    z-index: 12;
    }
    .container .cover::after{
    opacity: 0.3;
    transform: rotateY(180deg);
    backface-visibility: hidden;
    }
    .container .cover img{
    position: absolute;
    object-fit: cover;
    z-index: 10;
    }
    .container .cover .text{
    position: absolute;
    z-index: 130;
    height: 100%;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    }
    .cover .text .text-1,
    .cover .text .text-2{
    font-size: 26px;
    font-weight: 600;
    color: #fff;
    text-align: center;
    }
    .cover .text .text-2{
    font-size: 15px;
    font-weight: 500;
    }
    .container .forms{
    height: 100%;
    width: 100%;
    background: #fff;
    }
    .container .form-content{
    display: flex;
    align-items: center;
    justify-content: space-between;
    }
    .form-content .login-form,
    .form-content .signup-form{
    width: calc(100% / 2 - 25px);
    }
    .forms .form-content .title{
    position: relative;
    font-size: 24px;
    font-weight: 500;
    color: #333;
    }
    .forms .form-content .title:before{
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width: 25px;
    background: #2a36e8;
    }
    .forms .signup-form  .title:before{
    width: 20px;
    }
    .forms .form-content .input-boxes{
    margin-top: 30px;
    }
    .forms .form-content .input-box{
    display: flex;
    align-items: center;
    height: 50px;
    width: 100%;
    margin: 10px 0;
    position: relative;
    }
    .form-content .input-box input{
    height: 100%;
    width: 100%;
    outline: none;
    border: none;
    padding: 0 30px;
    font-size: 16px;
    font-weight: 500;
    border-bottom: 2px solid rgba(0,0,0,0.2);
    transition: all 0.3s ease;
    }
    .form-content .input-box input:focus,
    .form-content .input-box input:valid{
    border-color: #2a36e8;
    }
    .form-content .input-box i{
    position: absolute;
    color: #2a36e8;
    font-size: 17px;
    }
    .forms .form-content .text{
    font-size: 14px;
    font-weight: 500;
    color: #333;
    }
    .forms .form-content .text a{
    text-decoration: none;
    }
    .forms .form-content .text a:hover{
    text-decoration: underline;
    }
    .forms .form-content .button{
    color: #fff;
    margin-top: 40px;
    }
    .forms .form-content .button input{
    color: #fff;
    background: #2a36e8;
    border-radius: 6px;
    padding: 0;
    cursor: pointer;
    transition: all 0.4s ease;
    }
    .forms .form-content .button input:hover{
    background: #5b13b9;
    }
    .forms .form-content label{
    color: #5b13b9;
    cursor: pointer;
    }
    .forms .form-content label:hover{
    text-decoration: underline;
    }
    .forms .form-content .login-text,
    .forms .form-content .sign-up-text{
    text-align: center;
    margin-top: 25px;
    }
    .container #flip{
    display: none;
    }
    @media (max-width: 730px) {
    .container .cover{
        display: none;
    }
    .form-content .login-form,
    .form-content .signup-form{
        width: 100%;
    }
    .form-content .signup-form{
        display: none;
    }
    .container #flip:checked ~ .forms .signup-form{
        display: block;
    }
    .container #flip:checked ~ .forms .login-form{
        display: none;
    }
    }
    </style>
</head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="https://img.canarymedia.com/content/uploads/resized-pretty-wind-sunset.jpg?auto=compress%2Cformat&crop=focalpoint&fit=crop&fp-x=0.5&fp-y=0.3406&h=677&q=80&w=1168&s=ebaedddd4d18d6c1033179c081640846" alt="" style="width: 100%;height: 100%;">
        <div class="text">
        <img class="bxt" src="../assets/img/hf.svg"style="width: 100px;">
        </div>
      </div>
      <div class="back">
        <!--<img class="backImg" src="images/backImg.jpg" alt="">-->
        <div class="text">
          <span class="text-1">Complete miles of journey <br> with one step</span>
          <span class="text-2">Let's get started</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
        <form method="POST" action="{{ route('employee.login.submit') }}">
            @csrf
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input id="email" type="email" name="email" placeholder="Enter your email" value="{{ old('email') }}" required autocomplete="email" autofocus>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input id="password" type="password" placeholder="Enter your password" name="password" required autocomplete="current-password">
              </div>
              <div class="text"><a href="#">Forgot password?</a></div>
              <div class="button input-box">
                <input type="submit" value="Sumbit">
              </div>
              <div class="text sign-up-text">For more information visit <a href="{{url('/information')}}" class="nav-link">More Info</a></div>
            </div>
        </form>
      </div>
        <div class="signup-form">
          <div class="title">Signup</div>
        <form action="#">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Enter your name" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter your password" required>
              </div>
              <div class="button input-box">
                <input type="submit" value="Sumbit">
              </div>
              <div class="text sign-up-text">For more information visit <label for="flip">Login now</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
</body>
</html>


<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Login and Registration Form in HTML & CSS | CodingLab </title>
    <link rel="stylesheet" href="style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>

</html>