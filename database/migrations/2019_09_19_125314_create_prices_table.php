<?php


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->bigIncrements('id');
<<<<<<< Updated upstream
            $table->tinyInteger('child_count');
            $table->decimal('value', 13, 5);
            $table->decimal('over_price', 13, 5);
=======
            $table->integer('child_count')->default(1);
            $table->float('value')->default(0);
            $table->integer('over_price')->default(0);

>>>>>>> Stashed changes
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
        Schema::dropIfExists('prices');
    }
}
