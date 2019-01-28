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
    protected $signature = 'get:hashes {hashtags*}';

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
		
		foreach ($hashtags as $hashtag){
		  $this->call('get:hash', [
			  'hashtag' => $hashtag,
			  '--file' => 'auto',
		  ]);
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
