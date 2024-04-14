<?php

use App\Models\Facture;
use App\Models\Fiche_travail;
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
        Schema::create('memos', function (Blueprint $table) {
            $table->id();
            $table->date("amarrageNavire");
            $table->text("owner");
            $table->date("desamarrageNavire");
            $table->boolean("valider");
            $table->boolean("is_deleted")->default(false);
            // $table->foreignIdFor(Fiche_travail::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Facture::class)->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('memos');
    }
};
