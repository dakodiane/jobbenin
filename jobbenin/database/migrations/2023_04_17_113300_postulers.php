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
        Schema::create('postulers', function (Blueprint $table) {
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')
                ->references('id')
                ->on('users');

            $table->unsignedBigInteger('id_offre');
            $table->foreign('id_offre')
                ->references('id')
                ->on('offres');

            $table->primary(['id_user', 'id_offre']);
            $table->string('statut')->default('en cours');
            $table->string('cv');
            $table->string('motivation');
            $table->string('suppression')->default('1');
            $table->string('visible')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postulers');
    }
};
