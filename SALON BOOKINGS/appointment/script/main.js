function backArrow(){
    document.location.href="../index.html";
  } 

const steps = Array.from(document.querySelectorAll('form .step'));
const nextBtn = document.querySelectorAll('form .next-btn');
const prevBtn = document.querySelectorAll('form .previous-btn');
const form = document.querySelector('form');

nextBtn.forEach(button => {
    button.addEventListener('click', (e) => {
        changeStep('next');
    })
})
prevBtn.forEach(button =>{
    button.addEventListener('click', () => {
        changeStep('prev')
    })
})
// form.addEventListener('submit', (e) => {
//     e.preventDefault();
//     const inputs = [];
//     form.querySelectorAll('input').forEach(input=>{
//         const {name, value} = input;
//         inputs.push({name, value})
//     })
//     console.log(inputs)

//     form.reset();
  
//     let index = 0;
//     const active = document.querySelector('form .step.active');
//     index = steps.indexOf(active);
//     steps[index].classList.remove('active');
//     steps[0].classList.add('active');
    
// })

function changeStep(btn){
    let index = 0;
    const active = document.querySelector('form .step.active');
    index = steps.indexOf(active);
    steps[index].classList.remove('active');
    if(btn == 'next'){
        index ++;
    }else if(btn == 'prev'){
        index --;
    }
    steps[index].classList.add('active')
    // console.log(index)
}

var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) 
{
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}

function totalIt(){
    var input = document.getElementsByName("product");
    var subtotal = 0;
    var total = 0;
    var discount = 0;
    var taxExcluded = 0;
    var tax = 0;
    var advancePayment = 0;
    var reservation = 0;
    var deposit = 0;
    var pendingPrice;
    var price = 0;
    var tips = 0;
    var invoiceDiscount = 0;
    var invoiceTips = 0;
    var invoiceSubtotal = 0;
    var invoiceTax = 0; 
    var invoiceTotal = 0;

    for (var i = 0; i < input.length; i++){
        if (input[i].checked) {
            console.log(subtotal += parseFloat(input[i].value));
            // console.log(invoiceSubtotal += parseFloat(input[i].value));
        }
    }

    document.getElementsByName("subtotal")[0].value = "R" + subtotal.toFixed(2);

    if (subtotal == 0) {
        alert("Select the services you need!");
        document.getElementById("step-one").style.display = "none";
    }
    else if(subtotal > 0 && subtotal < 149){
        document.getElementById("step-one").style.width = "90%";
        document.getElementById("step-one").style.display = "flex";
        discount = subtotal * 0.0;
    }
    // else if (subtotal > 149 && subtotal < 200) {
    //     document.getElementById("step-one").style.width = "90%";
    //     document.getElementById("step-one").style.display = "flex";
    //     discount = subtotal * 0.1;
    // }
    // else if(subtotal >= 200 && subtotal < 300){
    //     document.getElementById("step-one").style.width = "90%";
    //     document.getElementById("step-one").style.display = "flex";
    //     discount = subtotal * 0.2;
    // }
    // else if (subtotal > 300 && subtotal < 500) {
    //     document.getElementById("step-one").style.width = "90%";
    //     document.getElementById("step-one").style.display = "flex";
    //     discount = subtotal * 0.3;
    // }
    else{
        document.getElementById("step-one").style.width = "90%";
        document.getElementById("step-one").style.display = "flex";
        //discount = subtotal * 0.5;   
    }   

    invoiceDiscount = discount;
    invoiceSubtotal = subtotal;
    taxExcluded = subtotal - subtotal * 0.15;
    tax = subtotal * 0.15;

    invoiceTax = tax;

    total = subtotal - discount + tips;
    advancePayment = subtotal * 0.5;

    deposit = advancePayment;
    reservation = total;
    pendingPrice = total;
    price = total;
    invoiceTotal = total;
    
    document.getElementsByName("discount")[0].value = "R" + discount.toFixed(2);
    
    document.getElementsByName("tips")[0].value = "R" + tips.toFixed(2);

    document.getElementsByName("taxExcluded")[0].value = "R" + taxExcluded.toFixed(2);

    document.getElementsByName("tax")[0].value = "R" + tax.toFixed(2);

    document.getElementsByName("total")[0].value = "R" + total.toFixed(2);

    document.getElementsByName("advancePayment")[0].value = "R" + advancePayment.toFixed(2);

    document.getElementsByName("reservation")[0].value = "R" + reservation.toFixed(2);

    document.getElementsByName("deposit")[0].value = "R" + deposit.toFixed(2);

    document.getElementsByName("pendingPrice")[0].value = "R" + pendingPrice.toFixed(2);

    document.getElementsByName("price")[0].value = "R" + price.toFixed(2);

    document.getElementsByName("invoiceDiscount")[0].value = "R" + invoiceDiscount.toFixed(2);

    document.getElementsByName("invoiceTips")[0].value = "R" + invoiceTips.toFixed(2);

    document.getElementsByName("invoiceSubtotal")[0].value = "R" + invoiceSubtotal.toFixed(2);

    document.getElementsByName("invoiceTax")[0].value = "R" + invoiceTax.toFixed(2);

    document.getElementsByName("invoiceTotal")[0].value = "R" + invoiceTotal.toFixed(2);

    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0');
    var yyyy = today.getFullYear();
    today = mm + ' / ' + dd + ' / ' + yyyy;
    document.getElementById("Date").innerHTML = today;
    document.getElementById("proofDate").innerHTML = today;
    console.log(today);

    const dateToday = new Date();
    const currentTime = dateToday.getHours() + ':' +
    dateToday.getMinutes() + ':' + dateToday.getSeconds();
    document.getElementById("Time").innerHTML = currentTime;
    console.log(currentTime);
}

// ********************************************
function assistant()
{
    var anyAssistant = document.getElementById("anyAssistant");
    var assistant1 = document.getElementById("assistant1");
    var assistant2 = document.getElementById("assistant2");
    var assistant3 = document.getElementById("assistant3");
    var submitCard = document.getElementById("submit-card");
    
    if(anyAssistant.checked == false && assistant1.checked == false && assistant2.checked == false && assistant3.checked == false){
        submitCard.disabled = true;
        submitCard.style.background = '#e4004471';
        return false;
    }
    else{
        submitCard.disabled = false;
        submitCard.style.background = '#e40046';
        return true;
    }
}

// **********************************************
function login(){
    document.getElementById("sign").style.display = "block";
    document.getElementById("log").style.display = "none";
}

function Registerlogin(){
    document.getElementById("error").style.display = "block";
    var Email = document.getElementById("mail");
    var Password = document.getElementById("pwd");
    var mailError = document.getElementById("mail-error");
    var pwdError  = document.getElementById("pwd-error");
    var submitLogin  = document.getElementById("submit-login");

    if(!Email.value.match(/^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)) {
        mailError.innerHTML = "Please enter a valid email";
        mailError.style.color = 'red';
        submitLogin.disabled = true;
        submitLogin.style.background = '#e4004471';
        return false;
    }else if(Password.value == ""){
        pwdError.innerHTML = "password field is empty!";
        pwdError.style.color = 'red';
        submitLogin.disabled = true;
        submitLogin.style.background = '#e4004471';
        return false;
    }else {
        document.getElementById("error").style.display = "none";
        mailError.innerHTML = " ";
        Email.style.border = '2px solid rgba(5, 104, 104, 0.895)';
        pwdError.innerHTML = " ";
        Password.style.border = '2px solid rgba(5, 104, 104, 0.895)';
        submitLogin.disabled = false;
        submitLogin.style.background = '#e40046';
        return true;
    }
}
function signin(){
    document.getElementById("sign").style.display = "none";
    document.getElementById("log").style.display = "block";
}
function Register(){
    var firstnameField = document.getElementById("firstname-field");
    var lastnameField = document.getElementById("lastname-field");
    var emailField = document.getElementById("email-field");
    var numberField = document.getElementById("number-field");
    var streetField = document.getElementById("street-name-field");
    var streetNoField = document.getElementById("street-number-field");
    var townField = document.getElementById("town-name-field");
    var hairColorField = document.getElementById("hairColor-field"); 
    var pwdField = document.getElementById("pwd-field"); 
    var pwdRepeatField = document.getElementById("pwd_repeat-field");
    var submitRegister = document.getElementById("submit-register");    

    if (firstnameField.value.trim() == "" || lastnameField.value.trim() == "" || emailField.value.trim() == "" || numberField.value.trim() == "" || streetField.value.trim() == "" || streetNoField.value.trim() == "" || townField.value.trim() == "" || hairColorField.value.trim() == "" || pwdField.value.trim() == "" || pwdRepeatField.value.trim() == "") {
        submitRegister.disabled = true;
        submitRegister.style.background = '#e4004471';
        return false;    
    }
    else if(!emailField.value.match(/^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)) {
        submitRegister.disabled = true;
        submitRegister.style.background = '#e4004471';
        return false;
    }
    else if(isNaN(numberField.value)){
        submitRegister.disabled = true;
        submitRegister.style.background = '#e4004471';
        return false;		
    }
    else if(numberField.value.length<10){
        submitRegister.disabled = true;
        submitRegister.style.background = '#e4004471';
        return false;	
    }
    else if(numberField.value.length>10){
        submitRegister.disabled = true;
        submitRegister.style.background = '#e4004471';
        return false;	
    }
    else if(numberField.value.charAt(0)!= 0){
        submitRegister.disabled = true;
        submitRegister.style.background = '#e4004471';
        return false;		
    }
    else if(isNaN(streetNoField.value)){
        submitRegister.disabled = true;
        submitRegister.style.background = '#e4004471';
        return false;		
    }
    else if (pwdField.value != pwdRepeatField.value) {
        submitRegister.disabled = true;
        submitRegister.style.background = '#e4004471';
        return false; 
    }
     else {
        submitRegister.disabled = false;
        submitRegister.style.background = '#e40046';
        firstnameField.style.border = '2px solid rgba(5, 104, 104, 0.895)';
        lastnameField.style.border = '2px solid rgba(5, 104, 104, 0.895)';
        emailField.style.border = '2px solid rgba(5, 104, 104, 0.895)';
        numberField.style.border = '2px solid rgba(5, 104, 104, 0.895)';
        streetField.style.border = '2px solid rgba(5, 104, 104, 0.895)';
        streetField.style.border = '2px solid rgba(5, 104, 104, 0.895)';
        townField.style.border = '2px solid rgba(5, 104, 104, 0.895)';
        hairColorField.style.border = '2px solid rgba(5, 104, 104, 0.895)';
        pwdField.style.border = '2px solid rgba(5, 104, 104, 0.895)';
        pwdRepeatField.style.border = '2px solid rgba(5, 104, 104, 0.895)';
        return true;  
    }
}
function next(){
    document.getElementById("sign").style.display = "none";
    document.getElementById("log").style.display = "block";
}
// function Register(){  
//     var firstnameField = document.getElementById("firstname-field");
//     var firstNameError = document.getElementById("firstName-Error");
    
//     var lastnameField = document.getElementById("lastname-field");
//     var lastNameError = document.getElementById("lastName-Error");
    
//     var emailField = document.getElementById("email-field");
//     var emailError = document.getElementById("email-error");
    
//     var numberField = document.getElementById("number-field");
//     var numberError = document.getElementById("number-error");
    
//     var addressField = document.getElementById("address-field");
//     var addressError = document.getElementById("address-error");
    
//     var teamsAndConditionField = document.getElementById("teamsAndCondition-field");
//     var teamsAndConditionError = document.getElementById("teamsAndCondition-error");
    
//     var hairColorField = document.getElementById("hairColor-field");
//     var hairColorError = document.getElementById("hairColor-error");
    
//     var hairColorField = document.getElementById("hairColor-field");
//     var hairColorError = document.getElementById("hairColor-error");
    
//     var pwdField = document.getElementById("pwd-field");
//     var pwdError = document.getElementById("pwd-error");
    
//     var pwdRepeatField = document.getElementById("pwd_repeat-field");
//     var pwdPepeatError = document.getElementById("pwd_repeat-error");    
    
//     var submitRegister = document.getElementById("submit-register");    

//     if (firstnameField.value.trim() == "") {
//         firstNameError.innerHTML = "Please fill the first name";
//         firstNameError.style.color = 'red';
        // submitRegister.disabled = true;
        // submitRegister.style.background = '#e4004471';
        // return false;
//     } 
//     else if(lastnameField.value.trim() == "") {
//         lastNameError.innerHTML = "Please fill the last name";
//         lastNameError.style.color = 'red';
//         submitRegister.disabled = true;
//         submitRegister.style.background = '#e4004471';
//         return false;
//     } 
//     else if(!emailField.value.match(/^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)) {
//         emailError.innerHTML = "Please enter a valid email";
//         emailError.style.color = 'red';
//         submitRegister.disabled = true;
//         submitRegister.style.background = '#e4004471';
//         return false;
//     }
//     else if(numberField.value == ""){
//         numberError.innerHTML = "Please fill mobile number";
//         numberError.style.color = 'red';
//         submitRegister.disabled = true;
//         submitRegister.style.background = '#e4004471';
//         return false;
//     }
//     else if(isNaN(numberField.value)){
//         numberError.innerHTML = "Enter only numberic value";
//         numberError.style.color = 'red';
//         submitRegister.disabled = true;
//         submitRegister.style.background = '#e4004471';
//         return false;		
//     }
//     else if(numberField.value.length<10){
//         numberError.innerHTML = "Mobile number must be 10 digit";
//         numberError.style.color = 'red';
//         submitRegister.disabled = true;
//         submitRegister.style.background = '#e4004471';
//         return false;	
//     }
//     else if(numberField.value.length>10){
//         numberError.innerHTML = "Mobile number must be 10 digit";
//         numberError.style.color = 'red';
//         submitRegister.disabled = true;
//         submitRegister.style.background = '#e4004471';
//         return false;	
//     }
//     else if(numberField.value.charAt(0)!= 0){
//         numberError.innerHTML = "Mobile number must start with 0";
//         numberError.style.color = 'red';
//         submitRegister.disabled = true;
//         submitRegister.style.background = '#e4004471';
//         return false;		
//     }
//     if(addressField.value.trim() == ""){
//         addressError.innerHTML = "Please fill the address field";
//         addressError.style.color = 'red';
//         submitRegister.disabled = true;
//         submitRegister.style.background = '#e4004471';
//         return false;		
//     }
//     // else if(teamsAndConditionField.checked == false){
//     //     document.getElementById("key").style.display = "none";
//     //     teamsAndConditionError.innerHTML = "Check teams and condition";
//     //     return false;		
//     // }
//     else if(hairColorField.value.trim() == ""){
//         hairColorError.innerHTML = "Please fill the color field";
//         hairColorError.style.color = 'red';
//         submitRegister.disabled = true;
//         submitRegister.style.background = '#e4004471';
//         return false;		
//     }
//     else if(hairColorField.value.trim() == ""){
//         hairColorError.innerHTML = "Please fill the color field";
//         hairColorError.style.color = 'red';
//         submitRegister.disabled = true;
//         submitRegister.style.background = '#e4004471';
//         return false;		
//     }
//     else if(pwdField.value.trim() == ""){
//         pwdError.innerHTML = "Please fill the password field";
//         pwdError.style.color = 'red';
//         submitRegister.disabled = true;
//         submitRegister.style.background = '#e4004471';
//         return false;		
//     }
//     else if(pwdRepeatField.value.trim() == ""){ 
//         pwdPepeatError.innerHTML = "Please fill the password field";
//         pwdPepeatError.style.color = 'red';
//         submitRegister.disabled = true;
//         submitRegister.style.background = '#e4004471';
//         return false;		
//     }
//     else {
//         firstNameError.innerHTML = " ";
//         firstnameField.style.border = '2px solid rgba(5, 104, 104, 0.895)';
        
//         lastNameError.innerHTML = " ";
//         lastnameField.style.border = '2px solid rgba(5, 104, 104, 0.895)';
        
//         emailError.innerHTML = " ";
//         emailField.style.border = '2px solid rgba(5, 104, 104, 0.895)';
        
//         numberError.innerHTML = " ";
//         numberError.style.border = '2px solid rgba(5, 104, 104, 0.895)';
        
//         addressError.innerHTML = " ";
//         addressField.style.border = '2px solid rgba(5, 104, 104, 0.895)';    
//         // teamsAndConditionError.innerHTML = "";
        
//         hairColorError.innerHTML = " ";
//         hairColorField.style.border = '2px solid rgba(5, 104, 104, 0.895)';
        
//         pwdError.innerHTML = " ";
//         pwdField.style.border = '2px solid rgba(5, 104, 104, 0.895)';
        
//         pwdPepeatError.innerHTML = " ";
//         pwdRepeatField.style.border = ' solid rgba(5, 104, 104, 0.895)';
        
//         submitRegister.style.background = '#e40046';
//         submitRegister.disabled = false;
//         return true; 
//     }    
// }

// ***************************************************
const tabBtn = document.querySelectorAll('header .menu-icon .icon ul li');
const tab = document.querySelectorAll('.tab');

function tabs(panelIndex){
    tab.forEach(function(node){
        node.style.display = 'none';
    });
    tab[panelIndex].style.display = 'block';
}
tabs(0);

let bio = document.querySelector('.bio');

function bioText() {
    bio.oldText = bio.innerText;
    bio.innerText = bio.innerText.substring(0, 100) + " ...  ";
    bio.innerHTML += "&nbsp;" + `<span onclick='addLength()' id='see-more-bio'>See More</span>`
    
}
bioText();

function addLength(){
    bio.innerHTML = bio.oldText;
    bio.innerHTML += "&nbsp;" +
     `<span onclick='bioText()' id='see-less-bio'>See Less</span>`
}

function reschedule(){
    document.getElementById("pre-submit").style.display = "none";
}
function updateYourProfile(){
    document.getElementById("pre-submit").style.display = "none";
}
function saveBookings(){
    alert("Time has been reschedule!");
    document.getElementById("reschedule").style.display = "none";
    document.getElementById("btn-update").style.display = "none";
    document.getElementById("pre-submit").style.display = "block";
    document.getElementById("nextAppointments").style.display = "block";
}
function update(){
    alert("Update has been successfully!");
    document.getElementById("updateYourProfile").style.display = "none";
    document.getElementById("pre-submit").style.display = "block";
    document.getElementById("nextAppointments").style.display = "block";
}
// *************************************************************
function payLater(){
    document.getElementById("pre-submit").style.display = "none";
    document.getElementById("btn-submit").style.display = "block";
    document.getElementById("final-step").style.display = "none";
    document.getElementById("step-one").style.display = "none";
}
function payment(){
    document.getElementById("alertBox").style.display = "block";
}

