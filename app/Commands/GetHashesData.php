<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class GetHashesData extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'get:hashes {hashtags*}
							{--limit=100}
							{--a}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Get files on all listed hashtags';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $hashtags = $this->argument('hashtags');
		$limit = $this->option('limit');
		if ($this->option('a')){
		  foreach ($hashtags as $hashtag){
			$this->call('get:hash', [
				'hashtag' => $hashtag,
				'--file' => './merged.txt',
				'--limit' => $limit,
				'--a' => true,
			]);
		  }
		} else {
		  foreach ($hashtags as $hashtag){
			$this->call('get:hash', [
				'hashtag' => $hashtag,
				'--file' => 'auto',
				'--limit' => $limit,
			]);
			sleep(5);
		  }
		}
	
	  
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
}
