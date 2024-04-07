<?php

use App\Models\Facture;
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
        Schema::create('fiche_travails', function (Blueprint $table) {
            $table->id();
            $table->integer("numeroCommande");
            $table->string("ownerItem");
            $table->string("dknvItem");
            $table->enum("typeDemande",["ajout","modification","annueller"])->nullable();
            $table->string("titreElement");
            $table->text("elementsImpacter");
            $table->integer("prix");
            $table->string("tempLivraison")->nullable();
            $table->text("remarque")->nullable();
            $table->foreignIdFor(Facture::class)->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};