<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Mail\YesidMail;
use Illuminate\Support\Facades\Mail;

class Yesid extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'yesid:prueba';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        Mail::to("carlos.sanchez.a0@gmail.com")->send(new YesidMail);
        echo 111;
    }
}
