<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create(Config::get('amethyst.employee.data.employee.table'), function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('legal_entity_id')->unsigned()->nullable();
            $table->foreign('legal_entity_id')->references('id')->on(Config::get('amethyst.legal-entity.data.legal-entity.table'));
            $table->integer('office_id')->unsigned()->nullable();
            $table->foreign('office_id')->references('id')->on(Config::get('amethyst.office.data.office.table'));
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists(Config::get('amethyst.employee.data.employee.table'));
    }
}
