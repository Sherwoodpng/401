<?php
    session_start();
    require_once dirname(__FILE__). '/dao.php';
    error_reporting(E_ALL);
        ini_set('display_errors', 1);
    $dao = new Dao();
 ?>
 
 
 <!doctype html>
 <html lang="en">
 <!-- <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=0">
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
 <meta charset='utf-8'> -->





 <head>
     <title>Planski</title>
     <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
     <link rel="stylesheet" href="planski.css">
 </head>

 <body>

     <div class="header" style="height:100%">
         Planski
         <img src="images\android-chrome-192x192.png" alt="Italian Trulli" style="height:50px">
     </div>

     <div class="row">
        <form id="login-form" method="POST" action="/handlers/loginHandler.php">
            <h1 class="heading">Login</h1>

            <div class="login-form-row">
                <label class="login-label" for="username">Please enter your username</label>
                <input id="username" type="text"  name="username"  placeholder="Username">
            </div>
            <div class="login-form-row">
                <label class="login-label" for="password">Please enter your password</label>
                <input id="password" type="password"  name="password" placeholder="Password">
            </div>
            <div class="login-form-row">
                <input id="login-submit"  type="submit" value="Login">
            </div>
        </form>
     </div>

     <div class="footer">
         Copyright 2020 &copy;

     </div>



     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="evo-calendar/js/evo-calendar.js"></script>
     <script>
         // Initialize evo-calendar in your script file or an inline <script> tag
         $(document).ready(function() {
             $('#calendar').evoCalendar({
                'theme': 'Royal Navy'
             })
         })
     </script>

 </body>

 </html