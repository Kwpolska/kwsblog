// Kw’s JS
// Copyright © 2013-2014, Chris “Kwpolska” Warrick.

$('#kw-navbar-collapse').on('show.bs.collapse', function () {
    $('#kw-navbar-collapse-icon').html('<i class="fa fa-chevron-up"></i>');
});

$('#kw-navbar-collapse').on('hide.bs.collapse', function () {
    $('#kw-navbar-collapse-icon').html('<i class="fa fa-chevron-down"></i>');
});
