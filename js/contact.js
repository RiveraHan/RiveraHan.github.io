/** Here there was a validation of the contact form and also certain activities in the DOM when the user sent the form. */
'use strict'


window.addEventListener('load', () => {

    const formulario = document.getElementById('formulario');  
    
    
    formulario.addEventListener('submit', function() {
        /* Given the submit event, it takes the value of the input name, input email and saves it in the localStorage and then uses that information on the page */
        var name = document.querySelector('#name').value;
        localStorage.setItem('name', name);

        var email = document.querySelector('#email').value;
        localStorage.setItem('email', email);

        let message = document.getElementById('message');

        // Validation of the form.
        if(name.trim() == null || name == 'undefined' || name.trim().length == 0) alert("El nombre no es válido o el campo nombre está vacío");
        
        if(email.trim() == null || email == 'undefined' || email.trim().length == 0) alert("El email no es válido o el campo email está vacío");

        if(message == null || message == 'undefined' || message.length == 0) alert('El mensaje no es válido o el campo mensaje está vacío');
        
    });
    
    
    var form_name = localStorage.getItem('name');
    var form_email = localStorage.getItem('email');

    /* After the user has entered data correctly, we verify in the localstorage that the data is correct so you can hide the form
    and present a message to the user with the name that entered and saved in the local storage. */
    if(form_name != null && form_name != 'undefined' && form_name != '' && form_email != null && form_email != 'undefined' && form_email != '') {

        formulario.style.display = 'none';// We hide the form

        let form = document.querySelector('#form');
        let h1 = document.querySelector('.hide');
        let parrafo = document.createElement('p');

        let text = document.createTextNode(`
        ${form_name}, gracias por ponerte en contacto, te responderemos a la brevedad.
        `);

        parrafo.append(text);
        form.appendChild(parrafo);

        form.style.textAlign = 'center';
        form.style.fontSize = '40px';
        form.style.fontWeight = 'bold';

        h1.innerHTML = "";
        
    } else {
        if(form_name == '' || form_email == '')
        window.location.href = "file:///opt/lampp/htdocs/Proyectos_www/RiveraHan.github.io/index.html#contacto";
        alert('Los datos del formulario no pueden ser enviados, verifique que esta ingresando los datos correctamente');

        localStorage.removeItem('name');
        localStorage.removeItem('email');
    }

    console.log(window.location);
});