<?php
//This program has been developed by students from the bachelor Computer Science 
//at Utrecht University within the Software and Game project course (2018)
//┬ęCopyright Utrecht University (Department of Information and Computing Sciences)
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProblemrepostatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problemrepostatistics', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('problemrepo_id')->unsigned();
            $table->integer('waves')->unsigned();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->foreign('problemrepo_id')->references('id')->on('problemrepo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('problemrepostatistics');
    }
}
