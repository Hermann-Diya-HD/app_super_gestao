<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_detalhes', function (Blueprint $table) {
            $table->id();
            $table->float('comprimento', 8,2);
            $table->float('largura', 8,2);
            $table->unsignedBigInteger('produto_id'); 
-           $table->timestamps();

            //Constraints
            $table->foreign('produto_id')->references('id')->on('produtos');
            $table->unique('produto_id');  //Para determinar o relacionamento 1:1 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto_detalhes');
    }
};
