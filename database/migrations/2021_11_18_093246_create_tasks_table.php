<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('task_id');
            $table->integer('list_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('name',20);
            $table->dateTime('reminder_datetime', $precision = 0);
            $table->date('due_date');
            $table->text('attachment_url');
            $table->text('note');
            $table->tinyInteger('is_complete');
            $table->tinyInteger('is_my_day');
            $table->dateTime('created_at', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
