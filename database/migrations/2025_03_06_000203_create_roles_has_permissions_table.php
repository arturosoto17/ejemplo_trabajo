<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('roles_has_permissions', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('id_role');
        $table->unsignedBigInteger('id_permission');
        $table->timestamps();

        $table->foreign('id_role')->references('id')->on('roles')->onDelete('cascade');
        $table->foreign('id_permission')->references('id')->on('permissions')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles_has_permissions');
    }
};
