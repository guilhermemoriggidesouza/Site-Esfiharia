
function animeScrolled(){
    var classe = $("#nav");
    var contGeral = $(".key");
    var velhaClasse = "back";
    var novaClasse = "back-novo";
    var distClasse = contGeral.offset().top;
    var distScroll = $(document).scrollTop();

     
    if(distScroll > distClasse){
        classe.removeClass(velhaClasse)
        classe.addClass(novaClasse);
     }else{
        classe.removeClass(novaClasse);
        classe.addClass(velhaClasse);
     }
}
function olhaoMacaco(){
    var classeMacaco = $(".macaco");
    var classeNovaMacaco = "macaco-novo";
    var distScroll = $(document).scrollTop();
    var offsset = $(window).height()*3/4;
    console.log(distScroll);
    classeMacaco.each(function(){

        var distMacaco = $(this).offset().top;
        console.log(distMacaco);
        console.log(distMacaco-offsset);
        if(distScroll > distMacaco-offsset){
            $(this).addClass(classeNovaMacaco);
        
        }
    });
}
function animeScroll(){
    var elemento = $(".anime");
    var newElemento = "anime-start";
    var offsset = $(window).height()*3/4;
    var documentTop = $(document).scrollTop();

    elemento.each(function(){

        var itemTop = $(this).offset().top;

        if (documentTop > itemTop-offsset){
            $(this).addClass(newElemento);
            
        }else{
        }
    });
}
$(document).scroll(function(){
    animeScrolled();
    olhaoMacaco();
    animeScroll();
})

//______________imagens.php_________________


