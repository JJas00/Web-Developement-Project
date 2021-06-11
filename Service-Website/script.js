
function menutoggle(){
    if(MenuItems.style.maxHeight == "0px"){
        MenuItems.style.maxHeight = "200px";
    }
    else{
        MenuItems.style.maxHeight = "0px";
    }
}

function register(){
    var x = document.querySelector("#login");
    var y = document.querySelector("#register");
    var z = document.getElementById("btt");
    x.style.left = "-400px";
    y.style.left = "50px";
    z.style.left = "110px";
}
function login(){
    var x = document.querySelector("#login");
    var y = document.querySelector("#register");
    var z = document.getElementById("btt");
    x.style.left = "50px";
    y.style.left = "450px";
    z.style.left = "0px";
}

function btnClicked(){
    var myText = ("Dear Customer, you are logged in successfully..Enjoy Our Service 🙂 ....");
    alert(myText);
}