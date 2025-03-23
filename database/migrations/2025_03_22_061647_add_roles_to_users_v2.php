<?php


use Illuminate\Database\Migrations\Migration;
use MongoDB\Laravel\Schema\Blueprint;  // Cambié la importación
use Illuminate\Support\Facades\Schema;

class AddRolesToUsersV2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Accede a la colección de usuarios y agrega el campo roles si no existe
        Schema::connection('mongodb')->table('users', function (Blueprint $collection) {
            $collection->string('roles')->default('[]');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Eliminar el campo roles
        Schema::connection('mongodb')->table('users', function (Blueprint $collection) {
            $collection->dropColumn('roles');
        });
    }
}


class AddRolesToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Accede a la colección de usuarios y agrega el campo roles si no existe
        Schema::connection('mongodb')->table('users', function (Blueprint $collection) {
            $collection->string('roles')->default('[]');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Eliminar el campo roles
        Schema::connection('mongodb')->table('users', function (Blueprint $collection) {
            $collection->dropColumn('roles');
        });
    }
}

