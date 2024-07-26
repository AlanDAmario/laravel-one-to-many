<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            //Creazione del campo
            $table->unsignedBigInteger('type_id');

            //Definizione della chiave esterna
            $table->foreign('type_id')
                ->references('id')
                ->on('types');

            //Aggiunta modalità meno verbosa
            //$table->foreign('type_id')->constrained();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            //cancellazione della relazione tra tabelle
            $table->dropForeign('projects_type_id_foreign');

            //Cancellazione della chiave esterna
            $table->dropColumn('type_id');
        });
    }
};
