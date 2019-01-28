<?php

namespace App;

/**
 * Description of Hashtag
 *
 * @author hennell
 */
class Hashtag {
  
  private $tag;
  private $postCount;
  private $totalLikes;
  
  /*
   * Creates a new hashtag object
   * 
   */
  public function __construct(string $tag=null, int $count=0, int $likes=0) {
	$this->setTagName($tag);
	$this->postCount = $count;
	$this->totalLikes = $likes;
  }
  
  public function setTagName(string $tag){
	$this->tag = $tag;
  }
  
  public function getTagName(){
	return $this->tag;
  }

  public function addPost(){
	$this->postCount ++;
  }
  
  public function addLikes(int $likes){
	$this->totalLikes += $likes;
  }
  
  public function getPostCount(): int{
	return $this->postCount;
  }
  
    public function getLikesCount(): int{
	return $this->totalLikes;
  }
  
  public function getAdverageLikes() : int{
	return $this->totalLikes / $this->postCount;
  }

  
}
