function vacios()
{  
    var vusuario=document.getElementById("usuario").value;
    var vcontrasena=document.getElementById("contrasena").value;
    
    if(vusuario==null || vusuario.length==0)
    {
        alert("Es necesario llenar el campo Usuario para continuar");
        return false;
    }
    else if(vcontrasena==null || vcontrasena.length==0)
    {
        alert("Es necesario llenar el campo Contraseña para continuar");
        return false;
    }
    else
    {
        return true;
    }
}

function vacios2()
{
    var vusuario=document.getElementById("usuario").value;
    var vcontrasena=document.getElementById("contrasena").value;
    var vrcontrasena=document.getElementById("rcontrasena").value;
    
    if(vusuario==null || vusuario.length==0)
    {
        alert("Es necesario llenar el campo Usuario para continuar");
        return false;
    }
    else if(vcontrasena==null || vcontrasena.length==0)
    {
        alert("Es necesario llenar el campo Contraseña para continuar");
        return false;
    }
    else if(vrcontrasena==null || vrcontrasena.length==0){
        
        alert("Es necesario llenar el campo Repetir contraseña para continuar");
        return false;
    }
    else{
        return true;
    }
}

function iguales()
{
    var vcontrasena=document.getElementById("contrasena").value;
    var vrcontrasena=document.getElementById("rcontrasena").value;
    
    if(vcontrasena!=vrcontrasena){
        alert("La contraseña no coincide");
        return false;
    }
    else{
        return true;
    }
}

function vacios3()
{
    var vnombre=document.getElementById("Nombre").value;
    var vapp=document.getElementById("apellido_paterno").value;
    var vapm=document.getElementById("apellido_materno").value;
    var vestado=document.getElementById("estado").selectedIndex;
    var vmunicipio=document.getElementById("municipio").selectedIndex;
    var vcolonia=document.getElementById("colonia").value;
    var vcalle=document.getElementById("calle").value;
    var vnumero=document.getElementById("numero").value;
    var vcp=document.getElementById("codigo_postal").value;
    var vtelefono=document.getElementById("telefono").value;
    
    if(vnombre==null || vnombre.length==0)
    {
        alert("Es necesario llenar el campo Ingrese nombre para continuar");
        return false;
    }
    else if(vapp==null || vapp.length==0)
    {
        alert("Es necesario llenar el campo Apellido paterno para continuar");
        return false;
    }
    else if(vapm==null || vapm.length==0)
    {
        alert("Es necesario llenar el campo Apellido materno para continuar");
        return false;
    }
    else if(vestado==null || vestado==0)
    {
        alert("Es necesario seleccionar un Estado para continuar");
        return false;
    }
    else if(vmunicipio==null || vmunicipio==0)
    {
        alert("Es necesario seleccionar un Municipio para continuar");
        return false;
    }
    else if(vcolonia==null || vcolonia.length==0)
    {
        alert("Es necesario llenar el campo Colonia para continuar");
        return false;
    }
    else if(vcalle==null || vcalle.length==0)
    {
        alert("Es necesario llenar el campo Calle para continuar");
        return false;
    }
    else if(vnumero==null || vnumero.length==0)
    {
        alert("Es necesario llenar el campo Número para continuar");
        return false;
    }
    else if(vcp==null || vcp.length==0)
    {
        alert("Es necesario llenar el campo Codigo Postal para continuar");
        return false;
    }
    else if(vtelefono==null || vtelefono.length==0)
    {
        alert("Es necesario llenar el campo Telefono para continuar");
        return false;
    }
    else
    {
        return true;
    }
}

function numeros()
{
    var vnumero=document.getElementById("numero").value;
    var vcp=document.getElementById("codigo_postal").value;
    var vtelefono=document.getElementById("telefono").value;
    
    if(isNaN(vnumero))
    {
        alert("Sólo se permiten valores numéricos en el campo Número");
        return false;
    }
    else if(isNaN(vcp))
    {
        alert("Sólo se permiten valores numéricos en el campo Codigo Postal");
        return false;
    }
    else if(isNaN(vtelefono))
    {
        alert("Sólo se permiten valores numéricos en el campo Telefono");
        return false;
    }
    else
    {
        return true;
    }
}
