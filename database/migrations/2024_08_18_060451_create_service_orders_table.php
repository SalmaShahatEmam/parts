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
        Schema::create('service_orders', function (Blueprint $table) {
            $table->id();
            $table->string('is_replay')->default(false);
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('title_message');
            $table->string('code');
            // $table->string('whatsapp');
            // $table->enum('best_contact_method', ['email', 'phone', 'whatsapp']);
            $table->text('message');
            $table->string('service_name_ar')->nullable();
            $table->string('service_name_en')->nullable();
            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_orders');
    }
};
