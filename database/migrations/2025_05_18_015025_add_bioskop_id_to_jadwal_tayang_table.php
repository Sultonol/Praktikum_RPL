<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::table('jadwal_tayang', function (Blueprint $table) {
        $table->unsignedBigInteger('bioskop_id')->after('studio_id');
        $table->foreign('bioskop_id')->references('bioskop_id')->on('bioskop')->onDelete('cascade');
    });
}

public function down()
{
    Schema::table('jadwal_tayang', function (Blueprint $table) {
        $table->dropForeign(['bioskop_id']);
        $table->dropColumn('bioskop_id');
    });
}
};
