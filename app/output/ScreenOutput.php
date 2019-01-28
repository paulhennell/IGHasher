<?php

namespace App\Output;

/**
 * Description of ScreenOutput
 *
 * @author hennell
 */
class ScreenOutput implements output{
 
  public function outputString(String $string) {
	echo $string;
  }
  
  public function outputHashtags(array $array){
	foreach ($array as $hashtag){
		  echo $hashtag->getTagName(), "\t", $hashtag->getPostCount(), "\t", $hashtag->getLikesCount(), "\r\n";
	}
  }
}
