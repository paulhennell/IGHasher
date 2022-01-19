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
	
	/**
   * Sorts taginfo objects via total count descending
   * @param Hashtag $a
   * @param Hashtag $b
   * @return int
   */
  static function sortByTotalCount($a, $b){
	if ($a->totalCount == $b->totalCount){
	  return 0;
	}
	return ($a->totalCount < $b->totalCount) ?  1 : -1;
	}
}
