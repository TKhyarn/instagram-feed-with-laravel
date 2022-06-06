<?php

namespace App\Console\Commands;

use Dymantic\InstagramFeed\Profile;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class InstagramRefreshFeed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'instagram:refresh-feed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Refresh the feed cache of the profile specified in conf';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try {
            Profile::for(env('INSTAGRAM_PROFILE'))->refreshFeed();
        } catch (\Exception $exception) {
            Log::error('Failed refreshing instagram feed for profile '.env('INSTAGRAM_PROFILE'), ['message' => $exception->getMessage()]);
        }
        return 0;
    }
}
