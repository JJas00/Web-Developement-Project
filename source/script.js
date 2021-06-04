
var MenuItems = document.getElementById("MenuItems");
MenuItems.style.maxHeight = "0px";

function menutoggle(){
    if(MenuItems.style.maxHeight == "0px"){
        MenuItems.style.maxHeight = "200px";
    }
    else{
        MenuItems.style.maxHeight = "0px";
    }
}

/* js for product gallary */
var ProductImg = document.getElementById("ProductImg");
var SmallImg = document.getElementsByClassName("small-img");
    SmallImg[0].onclick = function(){
       ProductImg.src = SmallImg[0].src;
    }
    SmallImg[1].onclick = function(){
        ProductImg.src = SmallImg[1].src;
    }
    SmallImg[2].onclick = function(){
        ProductImg.src = SmallImg[2].src;
    }
     SmallImg[3].onclick = function(){
        ProductImg.src = SmallImg[3].src;
    }

/* js for account  */

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


function viewAlert(){
    var myText = ("Dear Customer, Are you sure to make your payment online ....");
    prompt(myText);
    alert("Your Payment is successfull..you will receive a mail to your EmailId...Thanks for using RedStore... Have Nice day 💐");

}

function btnClicked(){
    var myText = ("Dear Customer, you are logged in successfully..Enjoy Shopping 🙂 ....");
    alert(myText);
}