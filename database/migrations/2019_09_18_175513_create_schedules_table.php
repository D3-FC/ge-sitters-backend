<?php


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('day')->nullable();
            $table->time('from')->nullable();
            $table->time('to')->nullable();
            $table->timestamps();
            $table->softDeletes();

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
        Schema::dropIfExists('schedules');
    }
}
