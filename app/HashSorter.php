<?php

namespace App;
use App\Hashtag;

/**
 * Description of HashSorter
 *
 * @author hennell
 */
class HashSorter {
  
  /**
   * Sorts Hashtag objects via post count descending
   * @param Hashtag $a
   * @param Hashtag $b
   * @return int
   */
  static function sortByCount(Hashtag $a, Hashtag $b){
	if ($a->getPostCount() == $b->getPostCount()){
	  return 0;
	}
	return ($a->getPostCount() < $b->getPostCount()) ?  1 : -1;
	}	
}
