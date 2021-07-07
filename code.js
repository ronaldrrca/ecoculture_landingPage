let name = document.getElementById("name");
let cellphone = document.getElementById("cellphone");
let email = document.getElementById("email");
let cityCountry = document.getElementById("cityCountry");
let type = document.getElementById("type");
let message = document.getElementById("message");
let error = "";


function preventSubmit(){
    document.getElementById("submit").preventDefault;  
    validate();  
}

/*Validación del formulario */
function validate(){
    if (name.value === "") {
            error = "Ingrese su nombre";
            document.getElementById("error").innerHTML = error;
        }else if(cellphone.value.length < 10 || cellphone.value.length > 10){
            error = "Ingrese los 10 digitos sin espacio ni guiones";
            document.getElementById("error").innerHTML = error;
        }else if(email.value === ""){
            error = "Ingrese una dirección de correo electrónico válida";
            document.getElementById("error").innerHTML = error;
        }else if(cityCountry.value === ""){
            error = "Ingrese ciudad y país de residencia";
            document.getElementById("error").innerHTML = error;
        }else if(type.value === "invalido"){
            error = "Seleccione una tipo de solicitud";
            document.getElementById("error").innerHTML = error;
        }else if(message.value === ""){
            error = "Por favor redacte su mensaje";
            document.getElementById("error").innerHTML = error;
        }else{
            document.getElementById("submit").removeEventListener("click", preventSubmit);           
        }
}



document.getElementById("submit").addEventListener("click", preventSubmit);


/* Slide automático de imágenes*/
let images = ["img1", "img2", "img3", "img4", "img5", "img6", "img7", "img8", "img9", "img10"]; 
let index = 0;
let activeImage = document.getElementById("activeImage");
let moveImage = images[index + 1];

setInterval(() => {
    let choosenImage = "./assets/images/" + images[index] + ".jpg";
    activeImage.setAttribute("src", choosenImage);
    index++;
        
    if(index >= images.length){
        index = 0;
    }
}, 6000);


/*Flechas para pasar imagenes */
let leftRow = document.getElementById("leftRow");
let rightRow = document.getElementById("rightRow");
let leftRowBlue = document.getElementById("leftRowBlue");
let rightRowBlue = document.getElementById("rightRowBlue");

rightRow.addEventListener("click", function(){
    index++;
    if(index >= images.length){
        index = 0;
    }
    activeImage.setAttribute("src", "./assets/images/" + images[index] + ".jpg");
});

leftRow.addEventListener("click", function(){
    index--;
    if(index <= 0){
        index = 9;
    }
    activeImage.setAttribute("src", "./assets/images/" + images[index] + ".jpg");
});

rightRowBlue.addEventListener("click", function(){
    index++;
    if(index >= images.length){
        index = 0;
    }
    activeImage.setAttribute("src", "./assets/images/" + images[index] + ".jpg");
});

leftRowBlue.addEventListener("click", function(){
    index--;
    if(index <= 0){
        index = 9;
    }
    activeImage.setAttribute("src", "./assets/images/" + images[index] + ".jpg");
});





