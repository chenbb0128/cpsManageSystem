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
        Schema::create('user_wallets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->index()->unsigned()->comment('用户id');
            $table->bigInteger('extract_buy_amount')->default(0)->comment('可提取购物余额');
            $table->bigInteger('extracting_buy_amount')->default(0)->comment('提取中购物余额');
            $table->bigInteger('extracted_buy_amount')->default(0)->comment('已提取的购物余额');
            $table->bigInteger('extract_invite_amount')->default(0)->comment('可提取的邀请余额');
            $table->bigInteger('extracting_invite_amount')->default(0)->comment('提取中的邀请余额');
            $table->bigInteger('extracted_invite_amount')->default(0)->comment('已提取的邀请余额');
            $table->bigInteger('extract_agent_amount')->default(0)->comment('已提取代理商奖励余额');
            $table->bigInteger('extracting_agent_amount')->default(0)->comment('提取中的代理商奖励余额');
            $table->bigInteger('extracted_agent_amount')->default(0)->comment('可提取代理商奖励余额');

            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_wallets');
    }
};
