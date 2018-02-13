<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;


class SendsReminders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reminders:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send SMS Reminders to every senior citizens every night weekdays only.' ; 
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
       $remind = new \App\Core\SendsReminders() ; 
       $remind->sendSMS() ; 
    }
}
