let name = document.getElementById("name");
let cellphone = document.getElementById("cellphone");
let phone = document.getElementById("phone");
let email = document.getElementById("email");
let city = document.getElementById("city");
let error = "";


function preventSubmit(){
    document.getElementById("submit").preventDefault;  
    validate();  
}

/*Validación del formulario */
function validate(){
    if (name.value === "") {
            error = "Escriba su nombre";
            document.getElementById("error").innerHTML = error;
        }else if(cellphone.value.length < 10 || cellphone.value.length > 10){
            error = "Ingrese los 10 digitos";
            document.getElementById("error").innerHTML = error;
        }else if(email.value === ""){
            error = "Ingrese un email valido";
            document.getElementById("error").innerHTML = error;
        }else if(city.value === ""){
            error = "Escriba su ciudad";
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





