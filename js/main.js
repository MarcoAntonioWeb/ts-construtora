/******* Configuração da rolagem do site ********/

(function($) {

    var $doc = $('html,body');
    $('.scroll-page').click(function() {
        $doc.animate({
            scrollTop: $($.attr(this,'href')).offset().top

        },700);
        return false;
    });
})(jQuery)

 