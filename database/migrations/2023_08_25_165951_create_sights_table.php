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
            $table->id('id');
            $table->string('location');
            $table->string('link')->nullable();
            $table->string('img')->nullable();
            $table->string('img1')->nullable();
            $table->string('img2')->nullable();
            $table->string('img3')->nullable();
            $table->string('img4')->nullable();
            $table->string('img5')->nullable();
            $table->string('img6')->nullable();
            $table->string('head')->nullable();
            $table->string('head1')->nullable();
            $table->string('head2')->nullable();
            $table->string('head3')->nullable();
            $table->string('head4')->nullable();
            $table->string('head5')->nullable();
            $table->string('head6')->nullable();
            $table->longText('par')->nullable();
            $table->longText('par1')->nullable();
            $table->longText('par2')->nullable();
            $table->longText('par3')->nullable();
            $table->longText('par4')->nullable();
            $table->longText('par5')->nullable();
            $table->longText('par6')->nullable();
            $table->string('izvor')->nullable();
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
