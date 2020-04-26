function vacioid()
{
    var vid=document.getElementById("id").value;
    
    if(vid==null || vid.length==0)
        {
            alert("Es necesario ingresar un Id válido para continuar");
            return false;
        }
}

function vacioidbaja()
{
    var vidbaja=document.getElementById("idbaja").value;
    
    if(vidbaja==null || vidbaja.length==0)
        {
            alert("Es necesario ingresar un Id válido para continuar");
            return false;
        }
}

function numeroid()
{
    var vid=document.getElementById("id").value;
    
    if(isNaN(vid))
       {
           alert("Sólo se permiten valores numéricos");
           return false;
       }
}

function numeroidbaja()
{
    var vidbaja=document.getElementById("idbaja").value;
    
    if(isNaN(vidbaja))
        {
            alert("Sólo se permiten valores numéricos");
            return false;
        }
}
