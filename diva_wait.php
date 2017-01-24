<?php

include 'diva_config.php';

function connect_server($host, $port) {
  $sock = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n");
  $ret = socket_connect($sock, $host, $port) or die("Could not connect to server\n");

  return $sock;
}

function wait_for_completion($sock) {
  while ($in = socket_read($sock, 32)) {
    $ret = strstr($in, "done");
    if ($ret)
        break;

    sleep(1);
  }

  socket_close($sock);
}

/* Main */
$sock_target = connect_server(DIVA_TARGET_IP, DIVA_TARGET_PORT);
$sock_capture = connect_server(DIVA_CAPTURE_IP, DIVA_CAPTURE_PORT);

wait_for_completion($sock_target);
wait_for_completion($sock_capture);

/* Redirect to result page */
header("Location: diva_result.php");
?>
