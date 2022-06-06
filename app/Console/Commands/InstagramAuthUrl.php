<?php

namespace App\Console\Commands;

use Dymantic\InstagramFeed\Profile;
use Illuminate\Console\Command;

class InstagramAuthUrl extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'instagram:authorisation-url';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'display the authorization link for the owner of the instagram account';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try {
            echo Profile::for(env('INSTAGRAM_FEED'))->getInstagramAuthUrl();
        } catch (\Exception $exception) {
            Log::error('Failed to get the profile authorization link for profile:  '.env('INSTAGRAM_PROFILE'), ['message' => $exception->getMessage()]);
            return 1;
        }

        return 0;
    }
}
