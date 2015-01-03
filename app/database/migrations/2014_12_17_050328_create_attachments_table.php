<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttachmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('photo', function($table)
        	{
			$table->engine = 'InnoDB';
		        $table->increments('id');
			$table->integer('user_id')->unsigned()->index();
			$table->string('photo_file_name');
			$table->string('photo_file_size');
			$table->string('photo_content_type');
			$table->string('hash');
			$table->tinyInteger('private')->default('0');
			$table->tinyInteger('attach_status')->default('0');
			$table->string('path')->nullable()->default(null);
			$table->string('url')->nullable()->default(null);
			$table->string('originalFilename')->nullable()->default(null);
			$table->string('size')->nullable()->default(null);
			$table->tinyInteger('save_domain')->default('0');
			$table->tinyInteger('client_type')->default('0');
			$table->timestamp('photo_updated_at');
		});

		Schema::create('avatar', function($table)
                {
                        $table->engine = 'InnoDB';
                        $table->increments('id');
                        $table->integer('user_id')->unsigned()->index();
                        $table->string('avatar_file_name');
                        $table->string('avatar_file_size');
                        $table->string('avatar_content_type');
                        $table->string('hash');
                        $table->tinyInteger('private')->default('0');
                        $table->tinyInteger('attach_status')->default('0');
                        $table->string('path')->nullable()->default(null);
                        $table->string('url')->nullable()->default(null);
                        $table->string('originalFilename')->nullable()->default(null);
                        $table->string('size')->nullable()->default(null);
                        $table->tinyInteger('save_domain')->default('0');
                        $table->tinyInteger('client_type')->default('0');
                        $table->timestamp('avatar_updated_at');
                        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
                });

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('photo');
		Schema::drop('avatar');
	}

}
