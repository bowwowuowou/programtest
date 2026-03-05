<?php namespace Track;
ini_set("memory_limit", -1);

function main($lines) {
  $S = str_split($lines[0]);
  $leftcolor = "b";
  $leftcount = 1;
  $rightcolor = "w";
  $rightcount = 1;

  for($i = 0; $i < count($S); $i++){
    $color = ($i % 2 == 0) ? "b" : "w";
    if($S[$i] == "L"){ 
      if($leftcolor == $color){
        $leftcount++;
      } else {
        if($rightcount == 0){
          $rightcolor = $leftcolor;
          $rightcount = $leftcount; 
          $leftcolor = $color;
          $leftcount = 1; 
        } else {
          $rightcount = $rightcount + $leftcount +1; 
          $leftcount = 0; 
        }
      }
    } else { 
      if($rightcolor == $color){
        $rightcount++;
      } else {
        if($leftcount == 0){
          $leftcolor = $rightcolor;
          $leftcount = $rightcount; 
          $rightcolor = $color;
          $rightcount = 1; 
        } else {
          $leftcount = $leftcount + $rightcount +1; 
          $rightcount = 0; 
        }
      }
    }
  }

  $black = 0;
  $white = 0;
  if($leftcolor == "b"){
    $black += $leftcount;
    $white += $rightcount;
  } else {
    $black += $rightcount;
    $white += $leftcount;
  }

  echo $black." ".$white;
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