<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rent', function (Blueprint $table) {
            // $table->integer('a_id');            
            // $table->double('rent', 8,2);
            // $table->double('maintenance', 8,2);
            // $table->double('total_amount' , 8, 2);
            // $table->double('pay_amount' , 8, 2);
            // $table->date('pay_date');
            // $table->date('generation_date')->nullable();
            // $table->date('next_generation_date')->nullable();
            // $table->enum('generated', ['1' , '0' ]);
            // $table->enum('status', ['paid' , 'unpaid' , 'partially_paid']);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rent', function (Blueprint $table) {
            // $table->dropColumn('month');
            // $table->dropColumn('pay_date');
            // $table->dropColumn('total_amount');
            // $table->dropColumn('pay_amount');
            // $table->dropColumn('status');
            // $table->dropColumn('is_active');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
