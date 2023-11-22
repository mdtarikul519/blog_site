<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('role_id')->nullable();
            $table->string('name', 50)->nullable();
            $table->string('email', 50)->nullable()->unique();
            $table->string('phone_number', 45)->nullable();
            $table->string('image', 100)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',200)->nullable();
            $table->string('slug',100)->nullable();

            $table->tinyInteger('status')->default(1);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
