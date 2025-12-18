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
        Schema::table('services', function (Blueprint $table) {
            Schema::table('services', function (Blueprint $table) {
                $table->dropColumn('technology_id');
            });
            $table->text('technology_id')->nullable()->after('category_id');
            $table->text('usps')->nullable()->after('description');
            $table->string('meta_title',200)->nullable()->after('title');
            $table->text('faqs')->nullable()->after('template');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            //
        });
    }
};
