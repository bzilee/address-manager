<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();

            $table->string('fullname');
            $table->string('mobile1')->nullable();
            $table->string('mobile2')->nullable();
            $table->string('domicile1')->nullable();
            $table->string('domicile2')->nullable();
            $table->string('email')->nullable();
            $table->boolean("favori")->default(0);
            $table->bigInteger('group_contact_id')->unsigned()->nullable();

            $table->foreign('group_contact_id')->references('id')->on('group_contacts')->onUpdate('cascade')->onDelete('set null');

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
        Schema::dropIfExists('contacts');
    }
}
