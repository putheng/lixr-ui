<?php

namespace Lixr\Ui\Commands;

use Illuminate\Console\Command;
use Lixr\Ui\Traits\VuexGenerator;

class VuexFetch extends Command
{
    use VuexGenerator;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'vue:fetch {action} {--endpoint=} {--endpoint=} {--state=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'vue:fetch admin/fetchUser --endpoint=/api/admin/user --state=user';

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
        //
    }
}
