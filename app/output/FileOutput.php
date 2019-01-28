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
  
  public function outputHashtags(array $array) {
	$data = "Tag\tPost Count\r\n";
	foreach ($array as $hashtag){
		  $data .= $hashtag->getTagName() . "\t".  $hashtag->getPostCount(). "\r\n";
	}
	$this->outputString($data);
  }

  public function outputString(String $string) {
	$f = fopen($this->filename, 'w');
	fwrite($f, $string);
	fclose($f);
  }

}
