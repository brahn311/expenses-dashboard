<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transactions', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->unsignedBigInteger('account_id')->comment('Bank account');
			$table->date('date')->comment('Transaction date');
			$table->string('reference', 20)->comment('Transaction reference number');
			$table->string('description', 50)->comment('Transaction description');
			$table->decimal('amount', 11, 2)->comment('Transaction amount');
			$table->unsignedBigInteger('category_id')->nullable()->comment('Transaction category id');
			$table->UnsignedBigInteger('status_id')->nullable()->comment('transaction status id');
			$table->timestamps();
			$table->softDeletes();
			$table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade')->onUpdate('cascade');
			$table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
			$table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade')->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('transactions');
	}
}
