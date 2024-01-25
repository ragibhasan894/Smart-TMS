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
            $table->string('name');
            $table->string('email')->unique();
            $table->foreignId('role_id')->constrained('roles');
            $table->foreignId('company_id')->constrained('companies');
            $table->foreignId('district_id')->constrained('districts');
            $table->foreignId('area_id')->constrained('areas');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('status')->default(\App\Constants\Status::ACTIVE);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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
