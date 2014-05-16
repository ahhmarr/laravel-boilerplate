<?php

use Illuminate\Database\Migrations\Migration;

class CreateIconType extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create("icon_types",function($table)
		{
			$table->increments("id");
			$table->string("icon_type");
			$table->boolean("free")->defaults(1);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop("icon_types");
	}

}