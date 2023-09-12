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
        Schema::create('sights', function (Blueprint $table) {
            $table->id();
            $table->string('link');
            $table->string('img');
            $table->string('img1');
            $table->string('img2');
            $table->string('img3');
            $table->string('img4');
            $table->string('img5');
            $table->string('img6');
            $table->string('head');
            $table->string('head1');
            $table->string('head2');
            $table->string('head3');
            $table->string('head4');
            $table->string('head5');
            $table->string('head6');
            $table->longText('par');
            $table->longText('par1');
            $table->longText('par2');
            $table->longText('par3');
            $table->longText('par4');
            $table->longText('par5');
            $table->longText('par6');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sights');
    }
};
