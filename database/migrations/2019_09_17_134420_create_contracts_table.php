<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('child_count')->default(1);
            $table->float('price')->default(0);
            $table->text('description');
            $table->ipAddress('coords_x');
            $table->ipAddress('coords_y');
            $table->text('payment_method');
            $table->boolean('accepted_at')->nullable();
            $table->boolean('declined_at')->nullable();
            $table->timestamp('start_at')->nullable();
            $table->timestamp('end_at')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->unsignedBigInteger('client_id')->nullable();
            $table->foreign('client_id')
                ->references('id')
                ->on('clients')
                ->onDelete('set null')
                ->onUpdate('set null');

            $table->unsignedBigInteger('worker_id')->nullable();
            $table->foreign('worker_id')
                ->references('id')
                ->on('workers')
                ->onDelete('set null')
                ->onUpdate('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
