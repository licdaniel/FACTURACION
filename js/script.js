let cerrar = document.querySelectorAll(".close")[0];
let abrir = document.querySelectorAll(".btn.verdes.añadir")[0];
let abrirMunicipio = document.querySelectorAll(".btn.verdes.municipio")[0];
let modal = document.querySelectorAll(".modal")[0];
let modalCerrar = document.querySelectorAll(".formulario")[0];

//----municipio
abrirMunicipio.addEventListener("click", function (e) {
    e.preventDefault();
    modalCerrar.style.opacity = "1";
    modalCerrar.style.visibility = "visible";
    modal.classList.toggle("modal-close");
});


//---------usuario
abrir.addEventListener("click", function (e) {
    e.preventDefault();
    modalCerrar.style.opacity = "1";
    modalCerrar.style.visibility = "visible";
    modal.classList.toggle("modal-close");
});

cerrar.addEventListener("click", function (e) {
    modal.classList.toggle("modal-close");

    setTimeout(function () {
        modalCerrar.style.opacity = "0";
        modalCerrar.style.visibility = "hidden";
    },700)
})

window.addEventListener("click", function (e) {
    if (e.target==modalCerrar) {
        modal.classList.toggle("modal-close");

    setTimeout(function () {
        modalCerrar.style.opacity = "0";
        modalCerrar.style.visibility = "hidden";
    },700)
    }
})

const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
    email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Lleva letras y acepton pero no numero.
    contraseña: /^.{4,16}$/ // 4 a 12 digitos.

}

const campos = {
    nombre: false,
    email: false,
    contraseña: false
}

const validarFormulario = (e) => {
    switch (e.target.name) {
        case "nombre":
            validarCampo(expresiones.nombre, e.target, 'nombre');
        break;

        case "email":
            validarCampo(expresiones.email, e.target, 'email');
            break;
    
        case "contraseña":
            validarCampo(expresiones.contraseña, e.target, 'contraseña');
            validarContraseña2();
        break;
        case "contraseña2":
            validarContraseña2();
        break;
    }
}

const validarCampo = (expresion, input, campo) => {
    if (expresion.test(input.value)) {
        document.getElementById(`grupo_${campo}`).classList.remove('grupo-formulario-incorrecto');
        document.getElementById(`grupo_${campo}`).classList.add('grupo-formulario-correcto');
        document.querySelector(`#grupo_${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
        campos[campo] = true;
    }
    else{
            document.getElementById(`grupo_${campo}`).classList.add('grupo-formulario-incorrecto');
            document.getElementById(`grupo_${campo}`).classList.remove('grupo-formulario-correcto');
            document.querySelector(`#grupo_${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
            campos[campo] = false;
    }
}

const validarContraseña2 = () => {
    const inputContraseña  = document.getElementById('contraseña');
    const inputContraseña2 = document.getElementById('contraseña2');

    if (inputContraseña.value !== inputContraseña2.value) {
        document.getElementById(`grupo_contraseña2`).classList.add('grupo-formulario-incorrecto');
        document.getElementById(`grupo_contraseña2`).classList.remove('grupo-formulario-correcto');
        document.querySelector(`#grupo_contraseña2 .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos['contraseña'] = false;
    }
    else{
        document.getElementById(`grupo_contraseña2`).classList.remove('grupo-formulario-incorrecto');
        document.getElementById(`grupo_contraseña2`).classList.add('grupo-formulario-correcto');
        document.querySelector(`#grupo_contraseña2 .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos['contraseña'] = true;
    }
}

inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit', (e) => {
    e.preventDefault();

    const terminos = document.getElementById('terminos');
    const sexo     = document.getElementsByName('sexo');
    const estado  = document.getElementById('estado');
    const cargo   = document.getElementById('cargo');
    if (campos.nombre && campos.email && campos.contraseña) {
        formulario.reset();

        document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
        setTimeout(() => {
            document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
        }, 4000);

        document.querySelectorAll('.grupo-formulario-correcto').forEach((borde) => {
            borde.classList.remove('grupo-formulario-correcto');
        });
    } else {
        document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
    }
});

// EFECTO PARA EL NAVEGADOR 

window.addEventListener("scroll", function () {
    const header = document.querySelector("header");
    header.classList.toggle('sticky', window.scrollY > 0);
});

//javascript for responsive NAVEGACION
const menubtn       = document.querySelector(".menu-btn");
const navegacion    = document.querySelector(".navegacion");
const navegacionBtn = document.querySelector(".navegacion .btn-link");

menubtn.addEventListener("click", ()=>{
    menubtn.classList.toggle("active");
    navegacion.classList.toggle("active");
});

navegacionBtn.forEach((navegacionBtn) => {
    navegacionBtn.addEventListener("click", () =>{
        menubtn.classList.remove("active");
        navegacion.classList.remove("active");
    });
});

//javascript for scroll to top button
const scrollBtn = document.querySelector(".scrollToTop-btn");

window.addEventListener("scroll", function(){
    scrollBtn.classList.toggle("active", window.scrollY > 500);
});

//javascript for scroll back to top on click scroll-to-top button
scrollBtn.addEventListener("click", () =>{
    document.body.scrollTo = 0;
    document.documentElement.scrollTo = 0;
});

//javascript for reveal website elements on scroll
window.addEventListener("scroll", reveal);

function reveal() {
    var reveals = document.querySelectorAll(".reveal");
    for (var i = 0; i <reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var revealTop    = reveals[i].getBoundingClientRect().top;
        var revealPoint  = 50;

        if(revealTop < windowHeight - revealPoint){
            reveals[i].classList.add("active");
        }
    }
}
