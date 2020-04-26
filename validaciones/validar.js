function vacios(){
    
    var vusuario=document.getElementById("usuario").value;
    var vcontrasena=document.getElementById("contrasena").value;
    
    if(vusuario==null || vusuario.length==0){
        alert("El campo usuario esta vacio");
        return false;
    }
    else if(vcontrasena==null || vcontrasena.length==0){
        alert("El campo contraseña esta vacio");
        return false;
    }
    else{
        return true;
    }
}

function vacios2(){
    var vusuario=document.getElementById("usuario").value;
    var vcontrasena=document.getElementById("contrasena").value;
    var vrcontrasena=document.getElementById("rcontrasena").value;
    
    
    if(vusuario==null || vusuario.length==0){
        alert("El campo usuario esta vacio");
        return false;
    }
    else if(vcontrasena==null || vcontrasena.length==0){
        alert("El campo contraseña esta vacio");
        return false;
    }
    else if(vrcontrasena==null || vrcontrasena.length==0){
        alert("El campo repetir contraseña esta vacio");
        return false;
    }
    else{
        return true;
    }
}

function iguales(){
    var vcontrasena=document.getElementById("contrasena").value;
    var vrcontrasena=document.getElementById("rcontrasena").value;
    
    if(vcontrasena!=vrcontrasena){
        alert("las contraseñas deben ser iguales");
        return false;
    }
    else{
        return true;
    }
}



            