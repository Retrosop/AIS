var miss = 0;
var hit = 0;
	
$(document).ready(function() {

	var play;

	$("#btnstart").click(function(){
		startplay();
	});

	function startplay() {
		$("#message").fadeOut('slow');
		$(".character").fadeOut('slow');
		$("#miss").html("0 мимо");
		$("#hit").html("0 в цель");
		miss = 0;
		hit = 0;
		$("#btnstart").css("color", "#e3e3e3");
		$("#btnstart").unbind("click");
		play = setInterval(scramble, 1800);
		setTimeout(function() {
			clearInterval(play);
			$("#btnstart").css("color", "#333333");
			$("#btnstart").bind("click", startplay);
			
			var dmiss = miss;
			var dhit = hit;
			var userdata = {'id':dmiss,'name':dhit};
				$.ajax({
						type: "POST",
						url: "update_data.php",
						data:userdata, 
						success: function(data){
							console.log(data);
						}
						});
			// Выводим финальное сообщение
			var containerPos = $('#container').offset();
			$("#message").animate(
			{
				top: containerPos.top,
				left: containerPos.left
			}, 'fast', function() 
			{
				setTimeout(function() 
				{
					$("#message").fadeIn('slow');
					$(".character").fadeIn('slow');
				}, 500);
			});
		}, 30*1000); //30 секунд
	}

	$(".character").click(function() {
		if ($(this).hasClass("ally")) {
			$(this).effect("bounce", {
				times: 2,
				direction: 'left'
			}, 300);
			$(this).slideUp("fast");
			miss++;
			$("#miss").html(miss + " мимо");
		} else {
			$(this).effect("explode", 500);
			hit++;
			$("#hit").html(hit + " в цель");
		}
	});
});

function randomFromTo(from, to){
	return Math.floor(Math.random() * (to - from + 1) + from);
}

function scramble() {
	var children = $('#container').children();

	var randomId = randomFromTo(1, children.length);
	moveRandom('char'+randomId);
	setTimeout(function(){
		$("#char"+randomId).slideDown('fast');            
	}, 500);
	
	setTimeout(function() {
		$("#char"+randomId).slideUp('fast');
	}, 1500);
}

function moveRandom(id) {

	var cPos = $('#container').offset();
	var cHeight = $('#container').height();
	var cWidth = $('#container').width();

	var pad = parseInt($('#container').css('padding-top').replace('px', ''));

	var bHeight = $('#'+id).height();
	var bWidth = $('#'+id).width();

	maxY = cPos.top + cHeight - bHeight - pad;
	maxX = cPos.left + cWidth - bWidth - pad;

	minY = cPos.top + pad;
	minX = cPos.left + pad;

	newY = randomFromTo(minY, maxY);
	newX = randomFromTo(minX, maxX);

	$('#'+id).animate({
		top: newY,
		left: newX
		}, 'slow', function() {
	});
}