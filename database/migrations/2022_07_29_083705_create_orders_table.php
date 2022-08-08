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
            $table->foreignId('user_id')->nullable()
                  ->onUpdate('cascade')->onDelete('set null');

            $table->string('billing_fname');
            $table->string('billing_lname');
            $table->string('billing_company_name');
            $table->string('billing_address');
            $table->string('billing_email');
            $table->string('billing_phone');
          //  $table->string('billing_total');
            $table->string('billing_shipped')->default(false);
            $table->string('billing_notes');
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
