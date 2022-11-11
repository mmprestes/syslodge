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
        Schema::table('users', function (Blueprint $table) {
            $table->uuid('lodge_id')->nullable();
            // $table->foreignUuid('lodge_id')->constrained('lodges');
            // $table->foreign('lodge_id')->references('id')->on('lodges');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // $table->dropForeign('users_lodge_id_foreign');
            $table->dropColumn('lodge_id');
        });

    }
};
