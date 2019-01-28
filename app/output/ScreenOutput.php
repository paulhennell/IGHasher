<?php

namespace App\Output;

/**
 * Description of ScreenOutput
 *
 * @author hennell
 */
class ScreenOutput implements output{
 
  public function outputArray(array $array){
	$this->outputArrayWithKeys($array);
  }
  
  public function outputArrayWithKeys(array $array) {
	foreach ($array as $key => $value){
	  echo $key, "\t", $value, "\r\n";
	}
  }

  public function outputString(String $string) {
	echo $string;
  }

}
