(function (){

    const sliders= [...document.querySelectorAll(".testimony_body")];
    
    const buttonNext = document.querySelector('#next');
    const buttonBefore = document.querySelector('#before');
    let value;
    
    buttonNext.addEventListener('click',()=>{
        changePosition(1);
    
    });
    
    buttonBefore.addEventListener('click',()=>{
        changePosition(-1);
    
    });
    
    const changePosition =(add) =>{
    const currentTestimony = document.querySelector(".testimony_body--show").dataset.id;
    
    value = Number(currentTestimony);
    value += add;
    
    sliders[Number(currentTestimony)-1].classList.remove("testimony_body--show");
    if(value===sliders.length+1 || value===  0){
        value = value === 0 ? sliders.length : 1;
     
    }
    
    sliders[value-1].classList.add("testimony_body--show");
    }
    
    })();

    document.getElementById('registroEquipoForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Evitar que el formulario se envíe
        
        // Obtener los valores de los campos del formulario
        var nombreEquipo = document.getElementById('nombreEquipo').value;
        var deporte = document.getElementById('deporte').value;
        var capitan = document.getElementById('capitan').value;
        var telefono = document.getElementById('telefono').value;
        
        // Aquí puedes agregar la lógica para enviar los datos a tu servidor o realizar otras acciones con ellos
        // Por ahora, simplemente los mostraremos en la consola
        console.log("Nombre del Equipo: " + nombreEquipo);
        console.log("Deporte: " + deporte);
        console.log("Capitán: " + capitan);
        console.log("Teléfono de Contacto: " + telefono);
    });
    