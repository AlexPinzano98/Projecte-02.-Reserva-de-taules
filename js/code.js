function validacionForm() {
    var email=document.getElementById('email').value;  
    var psswd=document.getElementById('psswd').value;

    if(email=='' && psswd==''){
        document.getElementById("message").innerHTML='<p style="color: red">Introduce todos los campos</p>';
        document.getElementById("email").style.borderColor = "red";
        document.getElementById("psswd").style.borderColor = "red";
        document.getElementsByClassName("botonesform")[0].style.border = '1px solid red';
        document.getElementsByClassName("botonesform")[1].style.border = '1px solid red';
    }else if(email==''){
        document.getElementById("message").innerHTML='<p style="color: red">El email es obligatorio</p>';
        document.getElementById("email").style.borderColor = "red";
        document.getElementById("psswd").style.borderColor = "grey";
        document.getElementsByClassName("botonesform")[0].style.border = '1px solid red';
        document.getElementsByClassName("botonesform")[1].style.border = '';
    }else if(psswd==''){
        document.getElementById("message").innerHTML='<p style="color: red">El password es obligatorio</p>';
        document.getElementById("psswd").style.borderColor = "red";
        document.getElementById("email").style.borderColor = "grey";
        document.getElementsByClassName("botonesform")[1].style.border = '1px solid red';
        document.getElementsByClassName("botonesform")[0].style.border = '';
    }else{
        return true;
    }

    return false;
}