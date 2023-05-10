$(document).foundation();

// make the selected menu button active (give permanent color on the background tab not only on hover)

$(document).ready(function(){
$('ul li a').click( function(){
    if ( $(this).hasClass('active') ) {
        $(this).removeClass('active');
    } else {
        $('li a.active').removeClass('active');
        $(this).addClass('active');    
    }
});
  });
  