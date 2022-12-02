<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // update : php artisan make:migration add_gender_column_to_students_table
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->string('gender',10)->required()->after('name');
        });
    }

    // rollback: php artisan migrate:rollback
    // rollback banyak : php artisan migrate:rollback --step(berapa banyak yg mau di rollback)
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropColumn('gender');
        });
    }
};
 