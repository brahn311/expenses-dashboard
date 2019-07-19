<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoldersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('holders', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('first_name', 40)->nullable(false)->comment('Holder first name');
			$table->string('last_name', 40)->comment('Holder last name');
			$table->UnsignedBigInteger('document_type_id')->nullable()->comment('Document type id');
			$table->string('document', 9)->comment('Document id');
			$table->timestamps();
			$table->softDeletes();
			$table->foreign('document_type_id')->references('id')->on('document_types')->onDelete('cascade')->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('holders');
	}
}
