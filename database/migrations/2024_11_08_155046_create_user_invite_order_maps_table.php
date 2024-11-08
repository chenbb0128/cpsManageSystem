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
        Schema::create('user_invite_order_maps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->comment('用户id');
            $table->bigInteger('contribute_user_id')->comment('该订单的购买者');
            $table->smallInteger('order_type')->comment('订单类别 1:淘宝订单 2:京东订单 3:拼多多订单');
            $table->bigInteger('order_id')->comment('订单id');
            $table->bigInteger('extract_amount')->default(0)->comment('提现金额');
            $table->smallInteger('commission_rate')->default(0)->comment('佣金比例(%)');
            $table->smallInteger('extract_status')->default(1)->comment('提现状态 1 未提现 2已提现 3已失效');

            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_invite_order_maps');
    }
};
