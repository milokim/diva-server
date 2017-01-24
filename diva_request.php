<?php

include 'diva_config.php';
header('Refresh: 2; URL=diva_wait.php');

function record_display() {
  send_data(DIVA_CAPTURE_IP, DIVA_CAPTURE_PORT, "capture:hdmi");
}

function run_minicom() {
  //exec('sudo python files/minicom.py');
	echo "Minicom will be implemented";
}

function send_data($host, $port, $msg) {
  $sock = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n");
  $ret = socket_connect($sock, $host, $port) or die("Could not connect to server\n");
  socket_write($sock, $msg, strlen($msg)) or die("Could not send data to server\n");
  socket_close($sock);
  return $ret;
}

function submit_job($id) {
  $msg = "job:" . $id;
  send_data(DIVA_TARGET_IP, DIVA_TARGET_PORT, $msg);
}

/* Main */

if (!ISSET($_GET['id']))
  return;

$id = $_GET['id'];
switch ($id) {
case 1:
    run_minicom();
    break;
case 2:
case 3:
    break;
default:
    return;
}

submit_job($id);
record_display();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DIVA - Testing...</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">
    <link href="css/spin.css" rel="stylesheet">
  </head>
  <body>
    <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="inner cover">
            <h1></h1>
            <p align="center">
              <button class="btn btn-lg btn-warning"><span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span> Testing... will be finished in 2 minutes</button>
            </p>
          </div>
        </div>
      </div>
    </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>
