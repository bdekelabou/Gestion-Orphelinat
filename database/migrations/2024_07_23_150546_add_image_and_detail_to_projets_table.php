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
        Schema::table('projets', function (Blueprint $table) {
            $table->string('image')->nullable()->after('description');
            $table->text('detail')->nullable()->after('image');
        });
    }

      /**
     * Reverse the migrations.
     */

    public function down()
    {
        Schema::table('projets', function (Blueprint $table) {
            $table->dropColumn(['image', 'detail']);
        });
    }
};
