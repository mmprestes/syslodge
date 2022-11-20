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
        Schema::table('lodges', function (Blueprint $table) {
            $table->string('rite')->nullable();
            $table->string('potency')->nullable();
            $table->string('session_day', 100)->nullable();
            $table->date('founded_at')->nullable();
            $table->string('email', 100)->nullable();
            $table->string('cnpj', 20)->nullable()->nullable();
            $table->string('phone_number',20)->nullable();
            $table->text('address')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lodges', function (Blueprint $table) {
            $table->dropColumn('rite');
            $table->dropColumn('potency');
            $table->dropColumn('session_day');
            $table->dropColumn('founded_at');
            $table->dropColumn('email');
            $table->dropColumn('cnpj');
            $table->dropColumn('phone_number');
            $table->dropColumn('address');
        });
    }
};
