<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->string('dni_empleado',8)->nullable($value = false);
            $table->string('nom_empleado',80)->nullable($value = false);
            $table->string('ape_empleado',80)->nullable($value = false);
            $table->char('sex_empleado',1)->nullable($value = false);
            $table->date('fnac_empleado')->nullable($value = false);
            $table->string('dir_empleado',250)->nullable($value = false);
            $table->string('dist_empleado',60)->nullable($value = false);
            $table->string('prov_empleado',60)->nullable($value = false);
            $table->string('dep_empleado',60)->nullable($value = false);
            $table->string('estciv_empleado',20)->nullable($value = false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
