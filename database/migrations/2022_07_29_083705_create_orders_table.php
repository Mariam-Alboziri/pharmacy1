<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();

            $table->string('billing_fname')->nullable();
            $table->string('billing_lname')->nullable();
            $table->string('billing_company_name')->nullable();
            $table->string('billing_address')->nullable();
            $table->string('billing_email')->nullable();
            $table->string('billing_phone')->nullable();
          //  $table->string('billing_total');
            $table->string('billing_shipped')->default(false);
            $table->string('billing_notes')->nullable();
         //   $table->string('billing_error')->nullable();





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
        Schema::dropIfExists('orders');
    }
};
