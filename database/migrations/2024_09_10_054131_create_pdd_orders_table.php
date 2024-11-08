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
        Schema::create('pdd_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('order_no', 64)->index()->default('')->comment('订单号');
            $table->string('goods_id', 64)->default('')->comment('商品id');
            $table->smallInteger('order_status')->default(0)->comment('订单状态');
            $table->string('goods_name')->default('')->comment('商品名称');
            $table->string('goods_sign')->default('')->comment('商品签名,搜索商品要用');
            $table->smallInteger('goods_count')->default(0)->comment('商品数量');
            $table->bigInteger('goods_price')->default(0)->comment('商品价格');
            $table->string('goods_image')->default('')->comment('商品图片');
            $table->bigInteger('payment_money')->default(0)->comment('付款金额(分)');
            $table->smallInteger('commission_rate')->default(0)->comment('佣金比率');
            $table->bigInteger('commission_money')->default(0)->comment('佣金金额');
            $table->timestamp('order_created_at')->nullable()->comment('订单创建时间');
            $table->timestamp('order_group_success_at')->nullable()->comment('成团时间');
            $table->timestamp('payment_at')->nullable()->comment('支付时间');
            $table->timestamp('order_update_at')->nullable()->comment('订单更新时间');
            $table->timestamp('order_receive_time')->nullable()->comment('订单确认收货时间');
            $table->timestamp('order_settle_time')->nullable()->comment('订单结算时间');
            $table->tinyInteger('price_compare_status')->default(0)->comment('比价状态: 0 正常 1 比价');
            $table->smallInteger('order_type')->default(0)->comment('下单场景类型');
            $table->string('pid', 64)->default('')->comment('pid');
            $table->string('group_id', 64)->default('')->comment('成团id');
            $table->string('custom_parameters')->default('')->comment('自定义的参数');

            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pdd_orders');
    }
};
