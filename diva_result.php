<?php
$name = file_get_contents("files/name.txt");
$devinfo = file_get_contents("files/device.txt");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DIVA - Test result</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Custom styles for this template -->
    <link href="css/navbar.css" rel="stylesheet">
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><b>D I V A</b></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li>&nbsp;</li>
            <li><a href="#about">How it works</a></li>
            <li><a href="examples.html">Examples</a></li>
            <li><a href="examples.html">Github</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div><br /></div>
    <div class="container theme-showcase" role="main">
      <div class="page-header">
        <h2><?php echo $name ?></h2>
      </div>
      <div class="result">
        <h3><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> OS information</h3>
        <pre><?php echo $devinfo ?></pre>
        <h3><span class="glyphicon glyphicon-console" aria-hidden="true"></span> Log</h3><h4><a href="files/log.txt">view</a></h4>
        <h3><span class="glyphicon glyphicon-facetime-video" aria-hidden="true"></span> Display capture</h3>
        <video width="720" height="540" controls >
           <source src="files/demo.mp4" type="video/mp4"> Your browser does not support the video tag.
        </video>
      </div>
    </div> <!-- /container -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>
<?php ?>
