 <?php
    session_start();
    require_once dirname(__FILE__). '/dao.php';
    error_reporting(E_ALL);
        ini_set('display_errors', 1);
    $dao = new Dao();

    if (!isset($_SESSION['auth']) || !$_SESSION['auth'] ||!isset($_SESSION['user_id']))  {
        header("Location: https://polar-sands-59708.herokuapp.com/login.php");
        exit;
    }
 ?>
 
 
 <!doctype html>
 <html lang="en">
 <!-- <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=0">
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
 <meta charset='utf-8'> -->

 <head>
     <title>Planski</title>
     <a href="/logout_handler.php">
        <p id="logout-button">Logout</p>
    </a>
     <link rel="stylesheet" type="text/css" href="evo-calendar/css/evo-calendar.css" />
     <link rel="stylesheet" type="text/css" href="evo-calendar/css/evo-calendar.midnight-blue.css" />
     <link rel="stylesheet" type="text/css" href="evo-calendar/css/evo-calendar.royal-navy.css" />
     <link rel="icon" type="image/x-icon" href="images/favicon.ico" />

     <link rel="stylesheet" href="planski.css">
 </head>

 <body>

     <div class="header" style="height:100%">
         Planski
         <img src="images\android-chrome-192x192.png" alt="Italian Trulli" style="height:50px">
     </div>

     <div class="row">
         <div class="column1">
                <?php
                $userName = $dao->getUsername($_SESSION['user_id']);
                echo "<p> Welcome {$userName['userName']}</p>";
                ?>
             <form method="POST" action="/task_handler.php">
                 <?php
                  $task = $dao->test();
                 ?>
                 <div>Task: <input type="text" name="task" id="task"/></div>
                 <input type="submit" name="addTask" value="Add Task"/>
                 <input type="submit" name="deleteTask" value="Delete Task"/>
            </form>
             
         </div>
         <div class="column2">
             <div id="calendar"></div>

         </div>
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