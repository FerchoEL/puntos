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
        Schema::create('redeemed_rewards_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('child_profile_id')->constrained('children_profiles');
            $table->foreignId('available_reward_id')->constrained('available_rewards');
            $table->timestamp('redeemed_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('redeemed_rewards_histories');
    }
};
