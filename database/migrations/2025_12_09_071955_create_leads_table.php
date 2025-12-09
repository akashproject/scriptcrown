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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('unique_id',100);
            $table->string('full_name',50)->nullable();
            $table->string('email_address',50)->nullable();
            $table->string('mobile_number',15)->nullable();
            $table->string('whatsapp_number',15)->nullable();
            $table->string('city',50)->nullable();
            $table->string('state',50)->nullable();
            $table->string('country',50)->nullable();
            $table->string('company_name',100)->nullable();
            $table->string('business_type',50)->nullable();
            $table->string('service_category',100)->nullable();
            $table->string('service_name',100)->nullable();
            $table->string('technology',100)->nullable();
            $table->text('requirement')->nullable();
            $table->text('document')->nullable();
            $table->string('utm_campaign',20)->nullable();
            $table->string('utm_source',20)->nullable();
            $table->string('lead_type',20)->nullable();
            $table->string('status_basket',20)->nullable();
            $table->string('remarks',20)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
