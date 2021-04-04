function activarcaja(){
    document.getElementById('inputState1').disabled=false
    document.getElementById('inputState2').disabled=true
}
function desactivarcaja(){
    document.getElementById('inputState1').disabled=true
    document.getElementById('inputState2').disabled=false
}
function nacional()
{
    document.getElementById('ciudad').disabled=false
    document.getElementById('direccion').disabled=false
    document.getElementById('telefono').disabled=false
    document.getElementById('dni').disabled=false
    document.getElementById('pais').disabled=true
    document.getElementById('codigo').disabled=true
    
}
function internacional()
{
    document.getElementById('pais').disabled=false
    document.getElementById('ciudad').disabled=false
    document.getElementById('direccion').disabled=false
    document.getElementById('telefono').disabled=false
    document.getElementById('codigo').disabled=false
    document.getElementById('dni').disabled=true
}

function operacion(){

    var x =parseInt(document.getElementById('kg').value);
    document.getElementById('resultado').innerHTML= x * 15 +" $u$";
    var y =parseInt(document.getElementById('tonelada').value);
    document.getElementById('resultado2').innerHTML=  y * 1000 *  15 +" $u$";


}


