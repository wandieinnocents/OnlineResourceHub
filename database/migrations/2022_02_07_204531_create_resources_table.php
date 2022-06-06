<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resources', function (Blueprint $table) {
            $table->id();
            $table->integer('resource_category_id');            
            $table->string('title');
            $table->string('audience');
            $table->string('written_permission');
            $table->string('written_permission_storage');
            $table->string('contact_person_written_permission');
            $table->string('permission_status');
            $table->string('topic');
            $table->text('link');
            $table->string('created_by');
            $table->text('partner_orgnisations');
            $table->text('date');
            $table->text('description');
            $table->text('attachment');
            $table->string('thumbnail');
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
        Schema::dropIfExists('resources');
    }
}
