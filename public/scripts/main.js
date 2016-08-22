/**
 * Created by ahassan on 8/18/16.
 */
$(function () {
    if(jQuery().ticker) {
        $('#js-news').ticker();
    }

    var tick = function() {
        $('#ticker li:first').slideUp(function() {
            $(this).appendTo($('#ticker')).slideDown();
        });
        //We can change slideUp with any other animation that you like, just don't forget to revert effects on element after transition. E.g
        //$('#ticker li:first').animate({'opacity':0}, 200, function () { $(this).appendTo($('#ticker')).css('opacity', 1); });
    };
    startTicker = setInterval(function() {
        tick()
    }, 1500);
    $("#ticker").hover(function() {
        window.clearInterval(startTicker)
    }, function() {
        startTicker = setInterval(function() {
            tick()
        }, 1500);
    });
    $( "#dialog-confirm" ).dialog({
        resizable: false,
        height: "auto",
        width: 400,
        modal: true,
        buttons: {
            Cancel: function() {
                $( this ).dialog( "close" );
            }
        }
    });
});
