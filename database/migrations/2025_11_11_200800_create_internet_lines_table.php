<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Governorate;
use App\Models\Prosecution;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('internet_lines', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Prosecution::class)->constrained()->cascadeOnDelete();
            $table->string('slug')->nullable();
            $table->string('code_line', 20)->unique();
            $table->string('order_number', 20)->unique();
            $table->string('internet_speed', 20);
            $table->string('type_line', 200);
            $table->ipAddress('ip_address')->nullable()->unique();
            $table->macAddress('mac_address')->nullable()->unique();
            $table->foreignIdFor(Governorate::class)->constrained()->cascadeOnDelete();
            $table->foreignId('created_by')->references('id')->on('admins')->onUpdate('cascade');
            $table->foreignId('updated_by')->nullable()->references('id')->on('admins')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internet_lines');
    }
};