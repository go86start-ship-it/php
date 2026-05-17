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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();//作成日時　更新日時
            $table->string("customer_name",150);
            $table->string('customer_post',20)->nullable();
            $table->string('customer_prefecture',255)->nullable();
            $table->string('customer_city',255)->nullable();
            $table->string('customer_build',255)->nullable();
            $table->string('customer_phone',30)->nullable();
            $table->integer('customer_capacity')->nullable();
            $table->string('customer_agerange',30)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};