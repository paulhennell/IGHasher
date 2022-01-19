<?php

namespace App\Output;

/**
 * Description of FileOutput
 *
 * @author hennell
 */
class FileOutput implements output{
  private $filename;
  
  public function __construct(string $filename, bool $append=false) {
	$this->filename = $filename;
	if ($append){
	  $this->mode = 'a';
	} else {
	  $this->mode = 'w';
	}
 }
  
  public function outputHashtags(array $array) {
	$data = "Tag\tPost Count\tTotal Likes\tAdverage Likes\r\n";
	foreach ($array as $hashtag){
		  $data .= $hashtag->getTagName() . "\t".  $hashtag->getPostCount(). "\t" . $hashtag->getLikesCount(). "\t". $hashtag->getAdverageLikes()."\r\n";
	}
	$this->outputString($data);
  }

  public function outputString(String $string) {
	$f = fopen($this->filename, $this->mode);
	fwrite($f, $string);
	fclose($f);
  }
  
  function outputTagInfo(Array $array){
	$data = "Tag\tTotal Count\tTop Posts\tTop Likes\r\n";
	foreach ($array as $tag){
		  $data .= $tag->name."\t". $tag->totalCount. "\t".$tag->topCount. "\t". $tag->mostLikes. "\r\n";
	}
	$this->outputString($data);
  }

}
