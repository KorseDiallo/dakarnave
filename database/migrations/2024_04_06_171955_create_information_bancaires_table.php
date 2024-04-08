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
        Schema::create('information_bancaires', function (Blueprint $table) {
            $table->id();
            $table->string("nomBanque");
            $table->string("adresse");
            $table->string("pays");
            $table->string("iban");
            $table->string("swift");
            $table->foreignIdFor(Client::class)->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('information_bancaires');
    }
};
