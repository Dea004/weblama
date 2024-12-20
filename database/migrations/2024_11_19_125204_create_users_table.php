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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); 
            $table->string('username', 50)->unique(); 
            $table->string('fullname', 100); 
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone', 15)->nullable(); 
            $table->string('password');
            $table->string('verification_code')->nullable(); // Kolom ini
            $table->rememberToken();
            $table->timestamps(); 
        });

        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index(); 
            $table->string('token'); 
            $table->timestamp('created_at')->nullable(); 
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary(); 
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade'); 
            $table->string('ip_address', 45)->nullable(); 
            $table->text('user_agent')->nullable(); 
            $table->longText('payload'); 
            $table->integer('last_activity')->index(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('password_resets');
        Schema::dropIfExists('users');
    }
};