window.onload = function(){clock()};
function clock() {
    // creo l'oggetto data
    var data = new Date();
    // recupero l'ora corrente
    var ora = data.getHours();
    // recupero i minuti attuali
    var min = data.getMinutes();
    // recupero i secondi attuali
    var sec = data.getSeconds();
    // formatto i minuti
    if (min < 10) {
        min = "0" + min;
    }
    // preparo l'output
    var output = ora + ":" + min + ":"+ sec;
    // scrivo l'ora nell'elemento
    document.getElementById("orologio").innerHTML = output;
    // richiamo la funione dopo un secondo
    setTimeout("clock()",1000);
}