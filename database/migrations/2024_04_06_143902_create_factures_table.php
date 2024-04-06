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
            $table->integer("numeroFacture");
            $table->date("debutTravaux");
            $table->date("finTravaux");
            $table->text("detailTravaux")->nullable();
            $table->float("montantBrut");
            $table->float("reductionDiscussion");
            $table->float("reductionRabaisFlotte");
            $table->float("reductionRabaisNavire");
            $table->enum("langue",["fr","us"]);
            $table->enum("devise",["fcfa","euro","dollar"]);
            $table->boolean("valider");
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
