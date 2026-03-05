<?php namespace Track;
ini_set("memory_limit", -1);

function main($lines) {
    $array = str_split($lines[0]);
    sort($array);
    if($array[0] == 0){
        for($i = 0; $i < count($array); $i++){
            if($array[$i] !== "0"){
                break;
            }
        }
        $tmp = $array[0];
        $array[0] = $array[$i];
        $array[$i] = $tmp;
    }
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