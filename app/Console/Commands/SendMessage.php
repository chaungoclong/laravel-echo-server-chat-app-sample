<?php

namespace App\Console\Commands;

use App\Events\MessageSent;
use Illuminate\Console\Command;

class SendMessage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'message:send {content}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command send message to testing';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        broadcast(new MessageSent((string)$this->argument('content')));
    }
}
