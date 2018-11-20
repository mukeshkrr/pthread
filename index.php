<?php
$pid = pcntl_fork();

if($pid) {
  // parent process runs what is here
  echo $pid;
  echo "parent\n";
}
else {
  // child process runs what is here
  echo "child\n";
}
?>
