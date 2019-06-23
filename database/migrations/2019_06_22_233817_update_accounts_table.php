<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('accounts', function (Blueprint $table) {
			$table->string('number', 20)
				->nullable(false)
				->after('id')
				->comment('Account number');
			$table->unsignedBigInteger('type_id')
				->nullable(false)
				->after('number')
				->comment('Account type id');
			$table->unsignedBigInteger('bank_id')
				->nullable(false)
				->after('type_id')
				->comment('Bank id');
			$table->string('branch', 40)
				->nullable();
			$table->foreign('bank_id')->references('id')->on('banks')->onDelete('cascade')->onUpdate('cascade');
			$table->foreign('type_id')->references('id')->on('account_types')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('accounts', function (Blueprint $table) {
			$table->dropForeign(['type_id']);
			$table->dropForeign(['bank_id']);
			$table->dropColumn(['number', 'type_id', 'bank_id', 'branch']);
        });
    }
}
