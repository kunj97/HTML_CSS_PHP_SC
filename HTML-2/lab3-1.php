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

  <h1> <span style="color: red;"> Kunj Patel </span> </h1>

  <hr>



  <!-- TASK 1 -- Write your PHP code in in the space provided below.   -->

  <div class="task">

    <h2> Task 1: Area Formula Demo </h2>

      <p> Area of a trapizoid is <span class="formula"> area = 0.5 &times; (a + b) &times; h </span> </p>

      <h3> Example </h3>



    <?php



        $a = rand (1,10);

        $b = rand (1,10);

        $h = rand (1,10);

        $result = 0.5 * ($a + $b) * $h;





        echo "<p> <span class=\"formula\"> a = $a, b = $b, h = $h</span></p>";

        echo "<p> <span class=\"formula\"> area = 0.5 &times ($a + $b) &times $h</span></p>";

        echo "<p> <span class=\"formula\"> area = $result</span></p>";



        ?>



  </div>



  <!-- TASK 2 -- Write your PHP code in in the space provided below.   -->

  <div class="task">

      <h2> Task 2: Rick Roll </h2>

      <p> Click for a funny cat video! </p>



      <?php

      $link1 = rand (1,2);



      if ($link1 == 1 ) {

        echo "<p> <a href=\"https://www.youtube.com/watch?v=oqNKD9YVe4U\" target=\"blank\"><img src=\"https://tinyurl.com/ybafqu2h\" alt=\"funny cat video\"> </a> </p>";

      }

      else {

        echo "<p> <a href=\"https://www.youtube.com/watch?v=dQw4w9WgXcQ\" target=\"blank\"><img src=\"https://tinyurl.com/ybafqu2h\" alt=\"funny cat video\"></a> </p>";

      }



       ?>



  </div>



  <!-- TASK 3 -- Write your PHP code in in the space provided below.   -->

  <div class="task">

      <h2> Task 3: Style sModification </h2>



      <?php

        $phase1= rand(1,9);



        if ($phase1 == 1) {

          echo '<p> <span style="color:red; font-size:0.5em;"> PHP is driving me crazy </span> </p>';

        }

        elseif ($phase1 == 2) {

          echo '<p> <span style="color:green; font-size:0.5em;"> PHP is driving me crazy </span> </p>';

        }

        elseif ($phase1 == 3) {

          echo '<p> <span style="color:blue; font-size:0.5em;"> PHP is driving me crazy </span> </p>';

        }

        elseif ($phase1 == 4) {

          echo '<p> <span style="color:red; font-size:1em;"> PHP is driving me crazy </span> </p>';

        }

        elseif ($phase1 == 5) {

          echo '<p> <span style="color:green; font-size:1em;"> PHP is driving me crazy </span> </p>';

        }

        elseif ($phase1 == 6) {

          echo '<p> <span style="color:blue; font-size:1em;"> PHP is driving me crazy </span> </p>';

        }

        elseif ($phase1 == 7) {

          echo '<p> <span style="color:red; font-size:3em;"> PHP is driving me crazy </span> </p>';

        }

        elseif ($phase1 == 8) {

          echo '<p> <span style="color:green; font-size:3em;"> PHP is driving me crazy </span> </p>';

        }

        else {

          echo '<p> <span style="color:blue; font-size:3em;"> PHP is driving me crazy </span> </p>';

        }



       ?>

  </div>

<body>

</html>
