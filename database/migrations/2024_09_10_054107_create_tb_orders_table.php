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
        Schema::create('tb_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("order_no", 64)->default("")->index()->comment("买家在淘宝后台显示的订单编号");
            $table->string("sub_order_no", 64)->default("")->index()->comment("每个商品对应订单编号");
            $table->string("goods_id")->default("")->comment("商品id");
            $table->string("goods_sign")->default("")->comment("商品签名");
            $table->string("goods_name")->default("")->comment("商品名称");
            $table->string("goods_image")->default("")->comment("商品图片");
            $table->smallInteger("goods_count")->default(0)->comment("商品数量");
            $table->string("order_type", 64)->default("")->comment("订单类别");
            $table->smallInteger("order_status")->default(0)->comment("订单状态");
            $table->tinyInteger("settle_account_status")->default(0)->comment("结算状态");
            $table->timestamp("order_created_at")->nullable()->comment("订单创建时间");
            $table->timestamp("payment_at")->nullable()->comment("付款时间");
            $table->timestamp("tb_payment_at")->nullable()->comment("淘宝付款时间");
            $table->bigInteger("payment_money")->default(0)->comment("付款金额(分)");
            $table->bigInteger("settle_account_money")->default(0)->comment("结算金额(分)");
            $table->bigInteger("total_commission_fee")->default(0)->comment("结算佣金(分)");
            $table->timestamp("tb_settle_at")->nullable()->comment("淘宝结算时间");
            $table->bigInteger("service_money")->default(0)->comment("服务费(分)");
            $table->smallInteger("commission_rate")->default(0)->comment("佣金比例(%)");
            $table->bigInteger("pre_payment_income")->default(0)->comment("预估收入(分)");
            $table->bigInteger("pre_settle_account_income")->default(0)->comment("结算预估收入");
            $table->string("adzone_id", 64)->default("")->comment("推广位id");
            $table->tinyInteger("rights_protection")->default(0)->comment("维权状态(0否 1是)");

            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_orders');
    }
};
