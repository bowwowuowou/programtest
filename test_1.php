<?php namespace Track;
ini_set("memory_limit", -1);

function main($lines) {
    echo ceil(($lines[0] - 1) / 6);
}

$array = array();
while (true) {
  $stdin = fgets(STDIN);
  if ($stdin == "") {
    break;
  }
  $array[] = rtrim($stdin);
}

main($array);