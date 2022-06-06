<?php

namespace Tests\Unit\Console\Commands;

use App\Console\Commands\InstagramAuthUrl;
use PHPUnit\Framework\TestCase;

class InstagramAuthUrlTest extends TestCase
{

    public function test_console_command(): void
    {
        $this->artisan('instagram:authorisation-url')->assertExitCode(0);
    }
}
