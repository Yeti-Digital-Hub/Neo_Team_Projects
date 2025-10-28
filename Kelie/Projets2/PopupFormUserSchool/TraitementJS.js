/*Interaction sur le bouton de connexion qui affiche le formulaire*/

const displayform = _('displayform'); 
const forLogin = _('forLogin');
const formLogin = _('formLogin');
const forRegister = _('forRegister');
const formRegister = _('formRegister');
const formContainer = _('formContainer');

displayform.addEventListener('click', showForm);

forRegister.addEventListener('click', () => {
    forLogin.classList.remove('active');
    forRegister.classList.add('active');
    if(formRegister.classList.contains('toggleform')){ /*lorsqu'un element contient la classe toggleform il est par defaut caché */
        formContainer.style.transform ='translate(-0.5%)';
        formContainer.style.transition = 'transform .5s';
        formRegister.classList.remove('toggleform');
        formLogin.classList.add('toggleform');
    }
});


forLogin.addEventListener('click', ()=>{
    forLogin.classList.add('active');
    forRegister.classList.remove('active');
    if(formLogin.classList.contains('toggleform')){
        formContainer.style.transform ='translate(0%)';
        formContainer.style.transition = 'transform .5s';
        formRegister.classList.add('toggleform'); /*à la classe formRegister on (ajout) rend le formulaire 'register' visible le 'login' invisible*/
        formLogin.classList.remove('toggleform');
    }
});

/*cette fonction permet de recuperer plusieurs éléments html ayant l'attribut id, 
elle rend le code plus lisible et précis*/
function _(e){                          
    return document.getElementById(e);
}

function showForm(){
    document.querySelector('.form-wrapper .card').classList .toggle('show');
}