$(document).ready(main);
var contador=1;
function main(){
	$('.menu_bar').click(function(){
		//$('nav').toggle(); //hace desaparecer el menu de una forma brusca
		if(contador == 1){
			$('nav').animate({
				left: '0'
			});
			contador = 0;
		} else {
			contador = 1;
			$('nav').animate({
				left: '-100%'
			});
		}
	});
	$('.subEmpleados').click(function(){
		$(this).children('.Empleadoh').slideToggle();
	});
};	