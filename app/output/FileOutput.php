<?php

namespace App\Output;

/**
 * Description of FileOutput
 *
 * @author hennell
 */
class FileOutput implements output{
  private $filename;
  
  public function __construct(string $filename) {
	$this->filename = $filename;
 }


  public function outputArray(array $array) {
	$data = "";
	foreach ($array as $value){
	  $data .= $value . "\r\n";
	}
	$this->outputString($data);
  }

  public function outputArrayWithKeys(array $array) {
	$data = "";
	foreach ($array as $key=> $value){
	  $data .= $key. "\t". $value . "\r\n";
	}
	$this->outputString($data);
  }

  public function outputString(String $string) {
	$f = fopen($this->filename, 'w');
	fwrite($f, $string);
	fclose($f);
  }

}
