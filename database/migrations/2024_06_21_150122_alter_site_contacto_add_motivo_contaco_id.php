<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Adicionando a coluna motivo_contacto_id
        Schema::table('site_contactos', function (Blueprint $table) {
            $table->unsignedBigInteger('motivo_contacto_id')->nullable();
        });

        //Atribuindo o motivo_contacto para a nova coluna motivo_contacto_id
        DB::statement('update site_contactos set motivo_contacto_id = motivo_contacto');

        Schema::table('site_contactos', function (Blueprint $table) {
            $table->foreign('motivo_contacto_id')->references('id')->on('motivo_contactos');

            $table->dropColumn('motivo_contacto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('site_contactos', function (Blueprint $table) {
            $table->integer('motivo_contacto');
            $table->dropForeign('site_contacto_motivo_contacto_id_foreign');
        });

        //Atribuindo o motivo_contacto para a nova coluna motivo_contacto_id
        DB::statement('update site_contactos set motivo_contacto = motivo_contacto_id');

        Schema::table('site_contactos', function (Blueprint $table) {
            $table->dropColumn('motivo_contacto_id');
        });
    }
};
