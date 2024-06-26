<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Area of Trapezoid, in JS." />
  <meta name="keywords" content="mths, ics2o" />
  <meta name="author" content="Fetuha" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Area of Trapezoid, in JS.</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script src="./js/script.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Area of Trapezoid, in JS</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/Screenshot 2024-03-28 14.43.31.png" alt="area of trapezoid image" />
      </div>
        <div class="page-content-php">
          <div id="user-info">
            <?php
            $baseA = $_POST["base-a"];
            $baseB = $_POST["base-b"];
            $heightOfTrapezoid = $_POST["height-of-trapezoid"];

            // process
            $area = ($baseA + $baseB) / 2 * $heightOfTrapezoid ;

            // output
            echo "If a trapezoid has base = " .  $baseA. " mm and the height = " . $heightOfTrapezoid . " mm:";
            echo "<br />";
            echo "<br />";
            echo "The area of the trapezoid is " . $area . " mm².";
            ?>
          </div>
        </div>
      </main>
  </div>
</body>

</html>