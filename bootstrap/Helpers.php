<?php

  function toEastern($number){
    $lang = app()->getLocale();
    $western = array('0','1','2','3','4','5','6','7','8','9');
    $eastern = array('٠','١','٢','٣','٤','٥','٦','٧','٨','٩');    
    if($lang == "fa"){
      return str_replace($western, $eastern, $number);
    }
    return $number;
  }