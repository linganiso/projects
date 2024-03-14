function validate()
{
        if (fName.value.trim() == "" || lName.value.trim() == "" || a=="")
        {
                fName.style.border = "solid 1px red";
                lName.style.border = "solid 1px red";  
                a.style.border = "solid 1px red";
                return false;
        }

        else if(isNaN(a)){
		document.getElementById("messages").innerHTML="enter only numberic value";
		 return false;		
	}
	else if(a.length<10){
		document.getElementById("messages").innerHTML="mobile number must be  not less than 10 digit";
		return false;	
	}
	else if(a.length>10){
		document.getElementById("messages").innerHTML="mobile number must be 10 digit";
		return false;	
	}
	else if(a.charAt(0)!=0){
		document.getElementById("messages").innerHTML="mobile number must start with 0";
		return false;		
	}
        else
        {

        }

        var mail = document.getElementById("mail").value;
        var regx = /^([a-z 0-9\.-]+)@([a-z0-9-]+).([a.z]{2,8})(.[a-z]{2,8})?$/;

        if(regx.test(mail))
        {
                document.getElementById("lbltext").innerHTML=" Valid";
                document.getElementById("lbltext").style.visibility = "visible";
                document.getElementById("lbltext").style.color="green";
                return false;
        }
        else
        {
                document.getElementById("lbltext").innerHTML="InValid";
                document.getElementById("lbltext").style.visibility = "visible";
                document.getElementById("lbltext").style.color="red";
        }
                // Password validation
                function password()
                {
                    var pass = document.getElementById('pwd');
                    var upper = document.getElementById('upper');
                    var lower = document.getElementById('lower');
                    var num = document.getElementById('number');
                    var len = document.getElementById('length');
                    var sp_char = document.getElementById('special_char');
        
                    if(pass.value.match(/[0-9]/))
                    {
                        num.style.color = 'green'
                    }
                    else
                    {
                        num.style.color = 'red'
                    }
        
                    if(pass.value.match(/[A-Z]/))
                    {
                        upper.style.color = 'green'
                    }
                    else
                    {
                        upper.style.color = 'red'
                    }
        
                    if(pass.value.match(/[a-z]/))
                    {
                        lower.style.color = 'green'
                    }
                    else
                    {
                        lower.style.color = 'red'
                    }
        
                    if(pass.value.match(/[!\@\#\$\%\^\&\*\(\)\_\+\=\?\>\<\.\,]/))
                    {
                        sp_char.style.color = 'green'
                    }
                    else
                    {
                        sp_char.style.color = 'red'
                    }
        
                    if(pass.value.length < 12)
                    {
                        len.style.color = 'green'
                    }
                    else
                    {
                        len.style.color = 'red'
                    }
                }
                function comform()
                {
                    var pass1 = document.getElementById('pwd');
                    var pass2 = document.getElementById('pwd_repeat');
        
                    if(pass1.value == pass2.value)
                    {
                        document.getElementById('number').style.display = 'none';
                        document.getElementById('length').style.display = 'none';
                        document.getElementById('special_char').style.display = 'none';
                        document.getElementById('upper').style.display = 'none';
                        document.getElementById('lower').style.display = 'none';
                    }
                    else
                    {
                        document.getElementById('number').style.display = 'block';
                        document.getElementById('length').style.display = 'block';
                        document.getElementById('special_char').style.display = 'block';
                        document.getElementById('upper').style.display = 'block';
                        document.getElementById('lower').style.display = 'block';
                    }
                }
}



