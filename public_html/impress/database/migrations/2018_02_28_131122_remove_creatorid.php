<?php
//This program has been developed by students from the bachelor Computer Science 
//at Utrecht University within the Software and Game project course (2018)
//┬ęCopyright Utrecht University (Department of Information and Computing Sciences)
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveCreatorid extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rooms', function (Blueprint $table) {
            $table->dropColumn(['creator_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rooms', function (Blueprint $table) {
            $table->integer('creator_id')->unsigned();
        });
    }
}
