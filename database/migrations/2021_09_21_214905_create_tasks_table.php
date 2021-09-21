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
            $table->id();
            $table->string('task_id');
            $table->string('account_id');
            $table->string('title');
            $table->longText('description');
            $table->text('brief_description');
            $table->longText('responsible_ids');
            $table->string('status');
            $table->string('importance');
            $table->longText('dates');
            $table->string('scope');
            $table->string('custom_status_id');
            $table->longText('has_attachments');
            $table->string('permalink');
            $table->string('priority');
            $table->timestamps();
            $table->dateTime('completed_at')->nullable();
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
