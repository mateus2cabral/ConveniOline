<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstagiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estagios', function (Blueprint $collection) {
            $collection->string('nomeProfessor');
            $collection->string('area');
            $collection->string('empresa');
            $collection->string('nomeAluno');
            $collection->string('matriculaAluno');
            $collection->string('supervisor');
            $collection->enum('status', ['ap', 're', 'ag']);
            $collection->date('data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estagios');
    }
}
