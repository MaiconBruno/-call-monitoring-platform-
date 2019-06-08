
window.onload = function(){
    //if usuario for administrador
        mostraGraficos();
    //else
        //escondeGraficos();
};
escondeGraficos();
s
function escondeGraficos(){
    document.getElementById("graficos").style.display = "none"; // esconte
}


function mostraGraficos(){
    document.getElementById("graficos").style.display = "block"; // esconte
}