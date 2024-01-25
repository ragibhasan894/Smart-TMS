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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('established_date');
            $table->string('category');
            $table->string('address');
            $table->string('trade_license_number');
            $table->string('website_url');
            $table->string('contact_number');
            $table->string('contact_email');
            $table->string('company_logo')->nullable();
            $table->mediumText('short_description')->nullable();
            $table->string('status')->default(\App\Constants\Status::PENDING);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
