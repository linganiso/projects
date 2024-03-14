function time(){
    var date = document.getElementById("date-field").value;
    var time = document.getElementById("time-field").value;
    var submitTime = document.getElementById("submit-time");    


    document.getElementById("date").innerHTML = date + "/";
    document.getElementById("whendate").innerHTML = date+ "/";

    document.getElementById("time").innerHTML = time;
    document.getElementById("whentime").innerHTML = time;

    if (date == "" || time == "") {
        submitTime.style.background = '#e4004471';
        submitTime.disabled = true;
        return false
    } else {
        submitTime.style.background = '#e40046';
        submitTime.disabled = false;
        return true;
    }
}