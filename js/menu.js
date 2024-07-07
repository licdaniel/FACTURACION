
let toggle = document.querySelector('.toggle');
let navegacion = document.querySelector('.navegacion');
let main = document.querySelector('.main');

toggle.onclick = function () {
    navegacion.classList.toggle('active');
    main.classList.toggle('active');
}

//add class list item
let list = document.querySelectorAll('.navegacion li');
function activeLink(){
    list.forEach((item) => 
    item.classList.remove('hovered'));
    this.classList.add('hovered');
}
list.forEach((item) => 
item.addEventListener('mouseover', activeLink));


/*            ---------------------Activar-Sub-MENU----------------------------------*/
    let menuToggle = document.querySelector('.user-text');
    let navigation = document.querySelector('.user-text');

    menuToggle.onclick = function () { //añade a navigation la clases active
        navigation.classList.toggle('active');
    }



