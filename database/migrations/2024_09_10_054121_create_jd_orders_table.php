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
        Schema::create('jd_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("unique_id", 64)->default('')->comment('标记唯一订单行：订单+sku维度的唯一标识');
            $table->string('order_no', 64)->index()->default('')->comment('买家在京东后台显示的订单编号');
            $table->string('sup_order_no', 64)->default('')->comment('父订单号(多个商品同时下单才存在)');
            $table->string('goods_id')->default('')->comment('商品id');
            $table->smallInteger('order_status')->default(0)->comment('订单状态');
            $table->string('goods_name')->default('')->comment('商品名称');
            $table->string('goods_image')->default('')->comment('商品图片');
            $table->string('shop_name',64)->default('')->comment('店铺名称');
            $table->string('shop_id', 64)->default('')->comment('店铺id');
            $table->smallInteger('goods_count')->default(0)->comment('商品数量');
            $table->smallInteger('goods_frozen_count')->default(0)->comment('商品售后中数量');
            $table->timestamp('order_created_at')->nullable()->comment('订单创建时间');
            $table->timestamp('order_finish_at')->nullable()->comment('订单完成时间');
            $table->timestamp('order_update_at')->nullable()->comment('订单更新时间');
            $table->bigInteger('payment_money')->default(0)->comment('付款时间');
            $table->smallInteger('commission_rate')->default(0)->comment('佣金比例');
            $table->smallInteger('subside_rate')->default(0)->comment('分成比例');
            $table->smallInteger('subsidy_rate')->default(0)->comment('补贴比例');
            $table->smallInteger('final_rate')->default(0)->comment('最终分佣比例（单位：%）=分成比例+补贴比例');
            $table->bigInteger('estimate_cos_price')->default(0)->comment('预估计佣金额(分)');
            $table->bigInteger('estimate_fee')->default(0)->comment('预估佣金(分)');
            $table->bigInteger('actual_cos_price')->default(0)->comment('实际计佣金额(分)');
            $table->bigInteger('actual_fee')->default(0)->comment('实际佣金(分)');
            $table->timestamp('jd_settle_at')->nullable()->comment('京东结算时间');
            $table->string('position_id')->default('')->comment('推广位id');

            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jd_orders');
    }
};
