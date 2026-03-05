<?php namespace Track;
ini_set("memory_limit", -1);

function main($lines) {
    $array = str_split($lines[0]);
    sort($array);
    $nonzero = array_filter($array, function($v){
        return $v !== "0";
    });
    $zero = array_filter($array, function($v){
        return $v == "0";
    });
    $array = array_values($nonzero);
    array_splice($array, 1, 0, $zero);
    $min = implode("",$array);
    print_r($min);
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