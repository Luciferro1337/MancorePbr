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
        Schema::create('mancores', function (Blueprint $table) {
            $table->id();
            $table->string('STO');
            $table->string('ODC');
            $table->string('ODP_Name');
            $table->string('ODC_Out_Pnl');
            $table->integer('ODC_Out_Port');
            $table->string('Spl_No');
            $table->integer('Spl_Port');
            $table->string('Distribusi');
            $table->integer('DIST_Core');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mancores');
    }
};
