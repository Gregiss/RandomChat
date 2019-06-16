function showmenu(){
    var menuHidden = 1;
    $(".menu").hide();

    $(".avatar").click(function(){
        if(menuHidden == 0){
            $( ".menu" ).fadeIn( "fast", function() {
                console.log("Menu show");
            });
            menuHidden = 1;
        } else{
            $( ".menu" ).fadeOut( "fast", function() {
                console.log("Menu hidden");
            });
            menuHidden = 0;
        }
    });

    $(".avatar").mouseover(function(){
        menuHidden = 0;
        $( ".menu" ).fadeIn( "fast", function() {
            console.log("Menu show");
        });
    });

    $(".menu").mouseout(function(){
        menuHidden = 0;
        $( ".menu" ).fadeIn( "fast", function() {
            console.log("Menu show");
        });
    });

    $(".menu").mouseleave(function(){
        menuHidden = 1;
        $( ".menu" ).fadeOut( "fast", function() {
            console.log("Menu hidden");
          });
    });
}

$(document).ready(function(){
    showmenu();
});