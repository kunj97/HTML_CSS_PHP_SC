<!-- PHP Intro Lab 3 - EECS 1012, York University -->
<!-- (CC) Michael S. Brown -->
<!DOCTYPE html>
<html>
<head>
  <title> Lab 3 - PHP Introduction </title>
  <meta charset="utf-8">
  <!-- Using an embedded CSS -->
  <style>
    body { font-family: sans-serif;
           background-color: white;}
    .task {
      margin: 20px;
        border: black 3px dotted;
        background-color: silver;
      }
      .formula /* For task 1 */
      {
        font-family: monospace;
        font-weight: bold;
        font-size: 1.6em;
        color: blue;
      }
      .task p {
        padding-left: 10px;
        padding-bottom: 0px;
      }
    }
  </style>

</head>
<body>
  <?php    # This code only needs to be used once and will provide some help in error reporting.
           # If your webpage is completely empty, please try the VirtualBox commandline PHP.
           # Alternatively you can try: https://tinyurl.com/phpsandbox

    ini_set('display_errors', 1); # only need to call these functions
    error_reporting(E_ALL);       # one time

  ?>
  <h1> Lab 3 </h1>
  <h1> <span style="color: red;"> YOUR NAME HERE </span> </h1>
  <hr>

  <!-- TASK 1 -- Write your PHP code in in the space provided below.   -->
  <div class="task">
    <h2> Task 1: Area Formula Demo </h2>
      <p> Area of a trapizoid is <span class="formula"> area = 0.5 &times; (a + b) &times; h </span> </p>
      <h3> Example </h3>

      <?php
        /* Task 1: Put your code here */


  ?>
  </div>

  <!-- TASK 2 -- Write your PHP code in in the space provided below.   -->
  <div class="task">
      <h2> Task 2: Rick Roll </h2>
      <p> Click for a funny cat video! </p>
      <?php

        /* Task 2: Put your code here */


       ?>

  </div>

  <!-- TASK 3 -- Write your PHP code in in the space provided below.   -->
  <div class="task">
      <h2> Task 3: Style Modification </h2>

      <?php
       /* Task 3: Put your code here */

       ?>
  </div>
<body>
</html>
