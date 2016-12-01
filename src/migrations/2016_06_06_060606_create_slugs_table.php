<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlugTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('slugs', function($table)
    {
      $table->string('class_name');
      $table->integer('object_id');

      $table->string('slug');
      $table->string('controller');
      
      $table->index('class_name');
      $table->index('object_id');

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::drop('counter');
  }

}
