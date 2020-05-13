$(document).ready(function () {

    $('#recOnPageSelect').change(function () {
        var recOnPageSelectValue = $(this).find(":selected").text();
        $.cookie('rec_in_page',recOnPageSelectValue, { path: '/'});
        document.location.reload(true);
    });

    $('#searchButtonMain').click(function () {
        var data = $('#searchText').val();
        var redirectUrl = window.location.origin+"/search?searchValue="+data;
        window.location.replace(redirectUrl);
    });

    $('#searchText').on('keypress',function(e) {
        if(e.which == 13) {
            var data = $('#searchText').val();
            var redirectUrl = window.location.origin+"/search?searchValue="+data;
            window.location.replace(redirectUrl);
        }
    });

    $('#searchButtonMain2').click(function () {
        var data = $('#searchText2').val();
        var redirectUrl = window.location.origin+"/search?searchValue="+data;
        window.location.replace(redirectUrl);
    });

    $('#sortSelect').change(function () {
        var sortSelectValue = $(this).find(":selected").val();
        console.dir(sortSelectValue);
        $.cookie('sortSelect',sortSelectValue, { path: '/'});
        document.location.reload(true);
    });

});
