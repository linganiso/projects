function func(){
    var chb = document.getElementsByClassName('chb');

    if (chb[0].checked) {
        document.getElementById("select--1").innerHTML = "Cut & Finish";
        document.getElementById("select---1").innerHTML = "Cut & Finish";

    }else{
        document.getElementById("select--1").innerHTML = " ";
        document.getElementById("select---1").innerHTML = " ";
    }
    if (chb[1].checked) {
        document.getElementById("select--2").innerHTML = "Shampoo & Finish";
        document.getElementById("select---2").innerHTML = "Shampoo & Finish";
    }else{
        document.getElementById("select--2").innerHTML = " ";
        document.getElementById("select---2").innerHTML = " ";
    }
    if(chb[2].checked){
        document.getElementById("select--3").innerHTML = "Children & Teens";
        document.getElementById("select---3").innerHTML = "Children & Teens";
    }else{
        document.getElementById("select--3").innerHTML = " ";
        document.getElementById("select---3").innerHTML = " ";
    }
    if(chb[3].checked){
        document.getElementById("select--4").innerHTML = "Shampoo & Finish";
        document.getElementById("select---4").innerHTML = "Shampoo & Finish";
    }else{
        document.getElementById("select--4").innerHTML = " ";
        document.getElementById("select---4").innerHTML = " ";
    }
    if(chb[4].checked){
        document.getElementById("select--5").innerHTML = "Shampoo & Finish";
        document.getElementById("select---5").innerHTML = "Shampoo & Finish";
    }else{
        document.getElementById("select--5").innerHTML = " ";
        document.getElementById("select---5").innerHTML = " ";
    }
    if(chb[5].checked){
        document.getElementById("select--6").innerHTML = "Shampoo & Finish";
        document.getElementById("select---6").innerHTML = "Shampoo & Finish";
    }else{
        document.getElementById("select--6").innerHTML = " ";
        document.getElementById("select---6").innerHTML = " ";
    }
    if(chb[6].checked){
        document.getElementById("select--7").innerHTML = "Children & Teens";
        document.getElementById("select---7").innerHTML = "Children & Teens";
    }else{
        document.getElementById("select--7").innerHTML = " ";
        document.getElementById("select---7").innerHTML = " ";
    }
    if(chb[7].checked){
        document.getElementById("select--8").innerHTML = "Children & Teens";
        document.getElementById("select---8").innerHTML = "Children & Teens";
    }else{
        document.getElementById("select--8").innerHTML = " ";
        document.getElementById("select---8").innerHTML = " ";
    }
    if(chb[8].checked){
        document.getElementById("select--9").innerHTML = "Shampoo & Finish";
        document.getElementById("select---9").innerHTML = "Shampoo & Finish";
    }else{
        document.getElementById("select--9").innerHTML = " ";
        document.getElementById("select---9").innerHTML = " ";
    }
    if(chb[9].checked){
        document.getElementById("select--10").innerHTML = "Shampoo & Finish";
        document.getElementById("select---10").innerHTML = "Shampoo & Finish";
    }else{
        document.getElementById("select--10").innerHTML = " ";
        document.getElementById("select---10").innerHTML = " ";
    }
    if(chb[10].checked){
        document.getElementById("select--11").innerHTML = "Shampoo & Finish";
        document.getElementById("select---11").innerHTML = "Shampoo & Finish";
    }else{
        document.getElementById("select--11").innerHTML = " ";
        document.getElementById("select---11").innerHTML = " ";
    }
    if(chb[11].checked){
        document.getElementById("select--12").innerHTML = "Children & Teens";
        document.getElementById("select---12").innerHTML = "Children & Teens";
    }else{
        document.getElementById("select--12").innerHTML = " ";
        document.getElementById("select---12").innerHTML = " ";
    }
    
}
function submit(){
    alert("Time has been reschedule!");
}