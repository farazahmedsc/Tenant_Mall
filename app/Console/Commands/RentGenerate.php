<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use App\Models\Area;
use App\Models\Tenants;
use App\Models\Rent;

class RentGenerate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rent:generate';

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

        $rents = Rent::select('rent.*')->join('tenants','rent.t_id','=','tenants.id')->where('rent.next_generation_date', date('Y-m-d'))->where('rent.generated', '0')->where('tenants.is_active','1')->get();

        foreach($rents as $rent){
            $last_rent = Rent::orderBy('created_at', 'desc')->first();

            $new_rent = new Rent();
            $new_rent->invoice_no = $last_rent->invoice_no +1;
            $new_rent->t_id = $rent->t_id;
            $new_rent->a_id = $rent->a_id;
            $new_rent->rent = $rent->rent;
            $new_rent->maintenance = $rent->maintenance;
            $new_rent->total_amount = $rent->total_amount;
            $new_rent->generation_date = $rent->next_generation_date;
            $new_rent->next_generation_date = date('Y-m-d', strtotime('+1 month', strtotime($rent->next_generation_date)));;
            $new_rent->generated = '0';
            $new_rent->status = 'unpaid';
            $new_rent->save();

            $temp_rent = Rent::find($rent->id);
            $temp_rent->generated = '1';
            $temp_rent->save();
        }

        // DB::table('test')->insert(
        //     [
        //         'name' => 'testing handle',
        //         'dates' => date('Y-m-d H:i:s')
        //     ]
        // );

        // \Log::info("Data is Submitted!");

        // return 0;


    }
}
