<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Routing\Matching\SchemeValidator;
use Illuminate\Support\Facades\Schema;

class AddingColumnPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('posts', function (Blueprint $table){
        //     $table->unsignedBigInteger('user_id');

        //     $table->foreign('user_id')
        //     ->references('id')
        //     ->on('users');
        // });
            
        Schema::table('posts', function (Blueprint $table) {
            $table->foreignId('category_id')->nullable()
                ->constrained();
        });

         
 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // $table->dropColumn('user_id');

        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign("[category_id]");
            $table->dropColumn('category_id');

        });
    }
}
