let name = document.getElementById("name");
let cellphone = document.getElementById("cellphone");
let phone = document.getElementById("phone");
let email = document.getElementById("email");
let city = document.getElementById("city");
let error = "";

/*Validación del formulario */
function validate(){
    if (name.value === "") {
            error = "Escriba el nombre";
            document.getElementById("error").innerHTML = error;
        }else if(cellphone.value.length < 10 || cellphone.value.length > 10){
            error = "numero invalido";
            document.getElementById("error").innerHTML = error;
        }else if(email.value === ""){
            error = "Escriba un email valido";
            document.getElementById("error").innerHTML = error;
        }else if(city.value === ""){
            error = "Escriba su ciudad";
            document.getElementById("error").innerHTML = error;
        }else{
            document.getElementById("submit").removeEventListener("click", preventSubmit);           
        }
}

function preventSubmit(){
    document.getElementById("submit").preventDefault;  
    validate();  
}

document.getElementById("submit").addEventListener("click", preventSubmit);


/* Slide imágenes*/
let images = ["img1", "img2", "img3", "img4", "img5", "img6", "img7", "img8", "img9", "img10"]; 
let index = 0;
let activeImage = document.getElementById("activeImage");

setInterval(() => {
    let choosenImage = "./assets/images/" + images[index] + ".jpg";
    activeImage.setAttribute("src", choosenImage);
    index++;
        
    if(index >= images.length){
        index = 0;
    }
}, 5000);

