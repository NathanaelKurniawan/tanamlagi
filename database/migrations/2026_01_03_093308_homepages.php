<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
{
    Schema::create('homepages', function (Blueprint $table) {
        $table->id();
        $table->string('section_name');
        $table->json('content')->nullable();
        $table->timestamps();
    });
}

    public function down(): void
    {
        //
    }
};
