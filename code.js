let name = document.getElementById("name");
let cellphone = document.getElementById("cellphone");
let phone = document.getElementById("phone");
let email = document.getElementById("email");
let city = document.getElementById("city");



function validate(){
    if (name.value === "") {
        console.log("Escriba el nombre");
    }else if(cellphone.value.length < 10 || cellphone.value.length > 10){
        console.log("numero invalido");
    }else if(phone.value.length < 7 || phone.value.length > 7){
        console.log("numero invala");
    }else if(email.value === ""){
        console.log("Escriba un email valido");
    }else if(city.value === ""){
        console.log("Escriba su ciudad");
    }else{
        document.getElementById("submit").removeEventListener("click", preventSubmit);           
    }
}

function preventSubmit(){
    document.getElementById("submit").preventDefault;  
    validate();  
}


document.getElementById("submit").addEventListener("click", preventSubmit);