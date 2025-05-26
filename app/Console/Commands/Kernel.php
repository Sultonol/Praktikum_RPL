<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use App\Console\Commands\BatalkanReservasiKadaluarsa;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
         BatalkanReservasiKadaluarsa::class,
    ];

    protected function schedule(Schedule $schedule)
    {
        $schedule->command('reservasi:batalkan-kadaluarsa')->everyMinute()->withoutOverlapping();
    }

    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
