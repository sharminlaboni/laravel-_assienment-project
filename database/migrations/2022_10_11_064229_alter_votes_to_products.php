<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedBigInteger('catagory_id')->nullable();
            $table->string('image')->nullable();


            $table->softDeletes();

            $table->foreign('catagory_id')
                  ->references('id')
                  ->on('catagories');
                  //->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['catagory_id']);
            $table->dropColumn('catagory_id');

            $table->dropColumn('image');


            $table->dropColumn('deleted_at');

        });
    }
};
