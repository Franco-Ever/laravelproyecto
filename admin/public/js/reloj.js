function mostrarHora()
{
    momentoActual = new Date();
    hora = momentoActual.getHours();
    minuto = momentoActual.getMinutes();
    segundo = momentoActual.getSeconds();

    horaImprimible = hora + ":" + minuto + ":" + segundo;
    document.getElementById('mostrarHora').innerHTML = horaImprimible;
}
function mostrarTiempo()
{
    momentoActual = new Date();
    dia = momentoActual.getDay();
    mes = momentoActual.getMonth();
    año = momentoActual.getFullYear();
    tiempoImprimible =dia  + "/" + mes + "/" + año;
    document.getElementById('mostrarHora2').innerHTML = tiempoImprimible;
}