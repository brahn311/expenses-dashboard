<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->UnsignedBigInteger('transaction_id')->comment('Comment transaction id');
			$table->string('title')->nullable()->comment('Comment title');
			$table->text('content')->comment('Comment content');
			$table->timestamps();
			$table->softDeletes();
			$table->foreign('transaction_id')->references('id')->on('transactions')->onDelete('cascade')->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('comments');
	}
}
