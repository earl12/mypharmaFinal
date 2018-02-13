<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
// use App\Core\Tasks\UpdatesDeliveryPackages as UpdatesDeliveries;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        '\App\Console\Commands\SendsReminders'
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->commandsnd('inspire')
        // ->hourly();

        // $update->command('packages ')
        // ->hourly()   

        //Send SMS Reminders to the Senior Citizens who will receive the parcels for tomorrow.
        $schedule->command('mypharma:send-sms')->dailyAt('19:00')->weekdays() ; 
        
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
 */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
