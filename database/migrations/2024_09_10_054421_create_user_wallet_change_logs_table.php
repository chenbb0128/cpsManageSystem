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
        Schema::create('user_wallet_change_logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->index()->comment('用户id');
            $table->smallInteger('category')->default(0)->comment('类型 1 购物余额 2 邀请余额 3 代理商余额');
            $table->smallInteger('change_type')->default(0)->comment('变化类别: 1 增加 2 减少');
            $table->bigInteger('before_amount')->default(0)->comment('变更前金额');
            $table->bigInteger('after_money')->default(0)->comment('变更后金额');
            $table->text('extra_info')->comment('额外的信息，json保存');

            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_wallet_change_logs');
    }
};
