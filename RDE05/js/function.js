$(function(){

    if($('target').length > 0){
        let $el = '#' + $('target').attr('target');
        console.log($el)
        let $divScroll = $($el).offset().top;
        console.log($divScroll)

        $('html,body').animate({scrollTop : $divScroll}, 1500);
    }

});