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
            $table->tinyInteger('min_child_age');
            $table->tinyInteger('max_child_age');
            $table->decimal('meeting_price', 13, 5);
            $table->decimal('coords_x', 10,6);
            $table->decimal('coords_y', 10,6);
            $table->string('animal_relationship');
            $table->text('description');
            $table->boolean('has_card_payment');
            $table->boolean('passport_confirmed');
            $table->boolean('sit_special_children');
            $table->boolean('has_training_school');
            $table->boolean('can_overwork');
            $table->date('birthday')->nullable();
            $table->timestamp('mobile_number_confirmed_at')->nullable();

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
