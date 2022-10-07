const datos = {
    nombre: '',
}

const nombre = document.querySelector('#nombre');
const guardar = document.querySelector('#guardar');


formulario.addEventListener('submit',function(e){


    const {nombre} = datos;

    //comprobando los campos
    if (nombre === '') {
        mostrarError('Los campos con asteriscos (*) son obligatorios');
        e.preventDefault()
        guardar.disabled = true;
        return;
    }


    mostrarMensaje("Formulario enviando correctamente");
})

nombre.addEventListener('input', leerTexto);





function mostrarAlerta(mensaje){
    const alerta = document.createElement('p');
    alerta.textContent = mensaje;

}
//validacion del formulario


function leerTexto(e){
    datos[e.target.id] = e.target.value;

}

function mostrarMensaje(mensaje){

    const alerta = document.createElement('p');
    alerta.textContent = mensaje;
    alerta.classList.add('alert', 'alert-success',);

    formulario.prepend(alerta);

    setTimeout(()=>{
        alerta.remove();
    },5000)


}


function mostrarError(mensaje) {
    const error = document.createElement('p');
    error.textContent = mensaje;
    error.classList.add('alert', 'alert-primary',);

    formulario.prepend(error);

    //despues de 3 segundo desaparece el error

    setTimeout(()=>{
        error.remove();
        guardar.disabled = false;
    },3000)

}
