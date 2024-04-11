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
            //$table->integer("numeroCommande");
            $table->string("ownerItem");
            $table->string("dknvItem");
            $table->enum("typeDemande",["ajout","modification","annuller"])->nullable();
            $table->string("titreElement");
            $table->text("observation")->nullable();
            $table->date("dateSignaturePropriétaire");
            $table->date("dateSignatureProductManager");


            $table->integer("prix");
            $table->string("tempLivraison")->nullable();
            $table->text("remarque")->nullable();
            $table->boolean("valider");
            $table->boolean("is_deleted")->default(false);

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
