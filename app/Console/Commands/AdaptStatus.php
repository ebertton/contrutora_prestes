<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Enterprise;
use App\Models\Status;


class AdaptStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'adapt:status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Adaptar os empreendimentos existentes a nova regra de negócio incluindo o progresso individual';

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
        $enterprises = Enterprise::with('status')->get();
        $availableStatus = [0,1,2,3,4,5];
        
        foreach($enterprises as $enterprise) {
            $existStatus = $enterprise->status->pluck('status')->toArray();
            $missingStatus = array_diff($availableStatus, $existStatus);
            foreach ($missingStatus as $i) {
                $statusInstance = new Status;
                $statusInstance->enterprise_id = $enterprise->id;
                $statusInstance->status = $i;
                $statusInstance->status_image = '/assets/img/img-status.png';
                $statusInstance->status_progress = 0;
                $statusInstance->save();
            }
        }

        return 'business rule successfully adapted';
        
    }
}
