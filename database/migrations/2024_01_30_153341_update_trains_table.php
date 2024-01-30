<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->string('company', 50)->nullable(true);
            $table->string('departure_station', 50)->nullable(true);
            $table->string('arrival_station', 50)->nullable(true);
            $table->time('departure_time', $precision = 0)->nullable(true);
            $table->time('arrival_time', $precision = 0)->nullable(true);
            $table->string('train_code', 20)->unique()->nullable(false);
            $table->tinyInteger('num_carriages')->unsigned()->nullable(true);
            $table->boolean('is_in_time')->nullable(true);
            $table->boolean('is_deleted')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('company');
            $table->dropColumn('departure_station');
            $table->dropColumn('arrival_station');
            $table->dropColumn('departure_time');
            $table->dropColumn('arrival_time');
            $table->dropColumn('train_code');
            $table->dropColumn('num_carriages');
            $table->dropColumn('is_in_time');
            $table->dropColumn('is_deleted');
        });
    }
};
