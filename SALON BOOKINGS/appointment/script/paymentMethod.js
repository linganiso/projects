
// *************************************************************
function payment(){
    var cardNumberField = document.getElementById("cardNumber-field");
    var cardNumberError = document.getElementById("cardNumber-error");
    
    var cardHolderField = document.getElementById("cardHolder-field");
    var cardHolderError = document.getElementById("cardHolder-error");
    
    var cvvField = document.getElementById("cvv-field");
    var cvvError = document.getElementById("cvv-error");

    var submit = document.getElementById("submit");

    if (cardNumberField.value.trim() == "") {
        cardNumberError.innerHTML = "*";
        submit.disabled = true;
        submit.style.background = '#e4004471';
        return false;
    }
    else if(cardHolderField.value.trim() == ""){
        cardHolderError.innerHTML = "*";
        submit.disabled = true;
        submit.style.background = '#e4004471';
        return false;
    }
    else if(cvvField.value.trim() == ""){
        cvvError.innerHTML = "*";
        submit.disabled = true;
        submit.style.background = '#e4004471';
        return false;
    }
    else {
        cardNumberError.innerHTML = " ";
        cardHolderField.innerHTML = " ";
        cvvField.innerHTML = " ";
        submit.disabled = false;
        submit.style.background = '#e40046';
        return true;  
    }
}