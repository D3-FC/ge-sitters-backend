<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('birthday')->nullable();
            $table->text('description')->nullable();
            $table->string('animal_relationship')->nullable();
            $table->float('meeting_price')->default(0);
            $table->boolean('has_card_payment')->nullable();

            $table->boolean('mobile_number_confirmed_at')->nullable();

            $table->boolean('passport_confirmed')->nullable();
            $table->integer('min_child_age')->default(0);
            $table->integer('max_child_age')->default(0);
            $table->boolean('sit_special_children')->nullable();
            $table->boolean('has_training_school')->nullable();
            $table->boolean('can_overwork')->nullable();
            $table->integer('coords_x')->nullable();
            $table->integer('coords_y')->nullable();


            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('set null')
                ->onUpdate('set null');

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
        Schema::dropIfExists('workers');
    }
}
