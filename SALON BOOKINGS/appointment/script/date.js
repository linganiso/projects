function myFist(){
    var firstname = document.getElementById("firstname-field").value;
    var lastname = document.getElementById("lastname-field").value;
    var name = document.getElementById("street-name-field").value;
    var street = document.getElementById("street-number-field").value;
    var town = document.getElementById("town-name-field").value;
    var accountHolder = document.getElementById("account-holder").value;
    var accountNo = document.getElementById("account-Number").value;
    var brachCode = document.getElementById("branch-code").value;
    
    document.getElementById("second").innerHTML = "Dear " + firstname + " " + lastname;
    document.getElementById("welcome").innerHTML = "Welcome back " + firstname;
    document.getElementById("invoiceTo").innerHTML = firstname + " " + lastname;
    document.getElementById("streetName").innerHTML = name + " Street ";
    document.getElementById("streetNo").innerHTML = street;
    document.getElementById("townName").innerHTML = town;
    document.getElementById("accountHolder").innerHTML = accountHolder;
    document.getElementById("accountNumber").innerHTML = accountNo;
    document.getElementById("branchCode").innerHTML = brachCode;

}