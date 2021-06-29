//----- Efecto Parallax -> Libreria
new universalParallax().init({
	speed: 8.0
});

//--- Menu Fixed
var altura = $('.menu').offset().top;
$(window).on('scroll', function(){

	if ($(window).scrollTop() > altura){
		$('.menu').addClass('menu-fixed');
		$('.slide-main').addClass('slide-fixed');
	} else {
		$('.menu').removeClass('menu-fixed');
		$('.slide-main').removeClass('slide-fixed');
	}
})

//----- Pestaña activa
$("ul.tabs li a:first").addClass('active-tab');
$(".tab").hide();
$(".tab:first").show();

$("ul.tabs li a").on("click", function(){
	$("ul.tabs li a").removeClass("active-tab");
	$(this).addClass("active-tab");
	$(".tab").hide();

	var activeTab = $(this).attr('href');
	$(activeTab).show();
	return false;
});



