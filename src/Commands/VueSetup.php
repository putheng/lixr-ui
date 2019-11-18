<?php

namespace Lixr\Ui\Commands;

use Illuminate\Console\Command;

class VueSetup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'vue:setup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'vue:setup (required vuex)';

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

    }
}