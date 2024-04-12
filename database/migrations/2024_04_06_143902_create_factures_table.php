<?php

use App\Models\Client;
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
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->string("numeroFacture");
            $table->string("numeroCommande");
            // $table->integer("reference");
            $table->date("debutTravaux");
            $table->date("finTravaux");
            $table->text("detailTravaux")->nullable();
            $table->double("montantBrut");
            $table->double("reductionDiscussion");
            $table->double("reductionRabaisFlotte");
            $table->double("reductionRabaisNavire");
            $table->enum("langue",["fr","us"]);
            $table->enum("devise",["fcfa","euro","dollar"]);
            $table->boolean("valider");
            $table->boolean("is_deleted")->default(false);
            $table->foreignIdFor(Client::class)->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factures');
    }
};
