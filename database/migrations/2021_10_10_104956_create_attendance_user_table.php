<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendanceUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendance_user', function (Blueprint $table) {
         
            $table->increments('id');
            $table->integer('user_id')->unsigned(); 
            $table->foreign('user_id')->references('id')->on('users'); 
            $table->integer('attendance_id')->unsigned(); 
            $table->foreign('attendance_id')->references('id')->on('attendance'); 
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
        Schema::dropIfExists('attendance_user');
        $table->dropForeign('lists_user_id_foreign');
        $table->dropIndex('lists_user_id_index');
        $table->dropColumn('user_id');
        $table->dropColumn('attendance_id');
    }
}
