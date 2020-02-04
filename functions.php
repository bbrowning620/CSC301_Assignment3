<?php

function jsonToArray($filename){
  
  $json_string = file_get_contents($filename);
  $array = json_decode($json_string, true);
  return $array;

}