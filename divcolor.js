<javascript>


$(document).ready(function () {
    var bar = $('.rating-bar');
    bar.css("background-color", "#7ba01c");


    //
    //Adapted from - http://stackoverflow.com/a/19797657/1773199
    //

    var parentWidth = parseInt($('.rating-bar-bg').css("width"));
    $('.rating-bar').each(function () {
        var e = $(this).css("width");
        e = parseInt(e);
        ratio = e / parentWidth * 100;
        if (ratio <= 24) {
			
            $(this).css("background-color", "#a41818");
        }
		else if (ratio >= 25 && e < 50) 
		{
            $(this).css("background-color", "#87581c");
        } 
		else if (ratio >= 50 && e < 75) {
            $(this).css("background-color", "#997815");
        } else if (e >= 75 && e < 91) {
            $(this).css("background-color", "#7ba01c");
        } else if (ratio >= 91) {
            $(this).css("background-color", "#3a8d24");
        }
    });
});
</javascript>