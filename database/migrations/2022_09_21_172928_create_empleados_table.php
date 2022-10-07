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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id('id', 11); //Identificados del empleado
            $table->string('nombre',250); // Nombre del empleado, Campo tipo Texr. Solo se debe permitir letras con o sin tilde y espacios. No se admotem carecteres especialis ni numeros. Obligatorio.
            $table->string('email',250); //Correo electronico del emplado. Campo de tipo Tex|Mail. Solo se permite una estructura de correo. Obligatorio.
            $table->char('sexo',1); // Campo de tipo Radio Button. M para el Masculino. F para el femenino. Obligatorio.
            $table->unsignedBigInteger('area_id'); // Area de la empresa a la que pertenece el empleado. Campo de tipo Select. Obligatorio.
            $table->foreign('area_id','fk_area_empleado')->references('id')->on('areas');
            $table->text('descripcion'); //Se describe la experiencia del empleado. Campo de tipo textarea. Obligatorio.
            $table->integer('boletin'); // 1 Para recibir boletín. 0 para No recibir boletín. Campo de tipo Checkbox. Opcional.
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
};
