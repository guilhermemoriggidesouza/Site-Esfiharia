var numero = 0;

function totalImagens(){
    var linha = "";
    for(i=1; i < 78; i++){
        console.log("imagem"+i)
        linha += "<a href='#' onclick='fotos("+i+");' data-toggle='modal' data-target='#meuModal'><img class='rotate img-fluid col-lg-3 col-md-6 col-sm-12 my-1' src=imagens/imagensTot/esfiha"+i+".jpg></a>"
    }
    var local = $("#fotosGeral");
    local.html(linha);
}

$(document).ready(function(){
    totalImagens();
    console.log(numero);
})

function fotos(numero){
    var foto = document.getElementById("fotoModal");
    foto.innerHTML ="<img src='imagens/imagensTot/esfiha"+numero+".jpg' class='img-fluid'>";
}
function setNext(){
    numero ++;
    if(numero <= 77){
        fotos(numero);
    }else{
        numero = 1;
        fotos(numero);
    }

}
function setBack(){
    numero--;
    if(numero >0){
        fotos(numero);
    }else{
        numero = 77;
        fotos(numero);
    }
}