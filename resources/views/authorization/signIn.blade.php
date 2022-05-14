<!doctype html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <!-- Адаптация -->
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="icon" type="image/png" href="{{asset('img/FH%20trans.ico')}}" />
 <!-- Установка Bootstrap на сайт -->
 <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 <!-- Установка Bootstrap на сайт -->
 <link href="{{asset('css/login.css')}}" rel="stylesheet">
 <title>Filmhub | Log in</title>
</head>
<!-- Форма входа -->

<body class="text-center">
<main class="form-login" onsubmit="return checkFormLog()" method="post">
 <form name="form1">
  <!-- Logo --><img class="logo" src="{{asset('img/Filmhub.jpg')}}" alt="" width="180" height="60">
  <!-- Logo -->
  <p></p>
  <h1>Please, log in!</h1>
  <p></p>
  <div class="form-floating">
   <!-- Floatign - делает label для заполнения -->
   <input type="text" class="form-control" id="name" placeholder="Example input" name="fullname">
   <label for="floatingInput">Full name</label>
  </div>
  <div class="form-floating">
   <!-- Floatign - делает label для заполнения -->
   <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
   <!-- Тип формы - e-mail -->
   <label for="floatingInput">E-mail address</label>
  </div>
  <div class="password">
   <div class="form-floating">
    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
    <!-- Тип формы - password -->
    <label for="floatingPassword">Password</label>
   </div>
  </div>
  <div class="checkbox mb-3">
   <p></p>
   <label>
    <input type="checkbox" value="remember-me"> Remember me </label>
  </div>
  <!-- Log in button -->
  <input class="w-100 btn btn-lg btn-danger" type="button" name="button" onClick="checkFormLog()" value="Log in">
  <div class="login">
   <p class="mt-5 mb-3 text-muted">Don't have an account?</p> <a href="signUp">Sign up</a> </div>
 </form>
</main>
<script type="text/javascript" src="{{asset('/js/main.js')}}"></script>
</body>
<!-- Форма входа -->

</html>
