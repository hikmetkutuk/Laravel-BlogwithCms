<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTagTable extends Migration {
    
    public function up() {
        Schema::create('post_tag', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('post_id');
            $table->integer('tag_id');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::drop('post_tag');
    }
}
