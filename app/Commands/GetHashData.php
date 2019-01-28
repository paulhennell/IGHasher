<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;
use InstagramScraper\Instagram;
use App\HashParser;

class GetHashData extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'get:hash {hashtag}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Get other hashtags from posts with this hashtag';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
		$hashtag = $this->argument('hashtag');
		$ig = new Instagram();
		$medias = $ig->getMediasByTag($hashtag,20);
		$alltags = array();
		foreach ($medias as $media){
		  $tags = HashParser::getTags($media->getCaption());
		  foreach ($tags as $tag){
			if (array_key_exists($tag, $alltags)){
				$alltags[$tag] ++;
			}else{
			  $alltags[$tag] =1;
			}
		  }
		}
		arsort($alltags);
		
		$this->displayTags($alltags);
		
    }

    /**
     * Define the command's schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    public function schedule(Schedule $schedule): void
    {
        // $schedule->command(static::class)->everyMinute();
    }
	
	public function displayTags(array $values){
	  foreach ($values as $tag => $count){
		echo $tag, "\t", $count, "\r\n";
	  }
	}
}
