const datos = {
    nombrecompleto: '',
    email: '',
    descripcion: '',
}

const nombrecompleto = document.querySelector('#nombrecompleto');
const email = document.querySelector('#email');
const descripcion = document.querySelector('#descripcion');
const formulario = document.querySelector('#formulario');



formulario.addEventListener('submit',function(e){
    const sexo = document.querySelector('input[name="sexo"]:checked');

    const {nombrecompleto,email,descripcion} = datos;

    //comprobando los campos
    if (nombrecompleto === '' || email === '' ||  descripcion === '' || !sexo) {
        mostrarError('Los campos con asteriscos (*) son obligatorios');
        e.preventDefault()
        guardar.disabled = true;
        return
    }



    mostrarMensaje("Formulario enviando correctamente");
})

nombrecompleto.addEventListener('input', leerTexto);
email.addEventListener('input', leerTexto);
descripcion.addEventListener('input', leerTexto);




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

    //despues de 5 segundo desaparece el error

    setTimeout(()=>{
        error.remove();
        guardar.disabled = false;
    },5000)

}
