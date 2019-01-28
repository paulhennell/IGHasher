<?php

namespace App;

/**
 * Description of HashParser
 *
 * @author hennell
 */
class HashParser {
  
  /**
   * Returns an array of hashtags found in string
   * 
   * @param \App\String $caption
   * @return array
   */
  public static function getTags(String $caption){
	$pattern = "/#[^\s#]*/";
	preg_match_all($pattern, $caption, $tags);
	return $tags[0];
  }
}
