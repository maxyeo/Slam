$(document).ready(function() {  

	sizeitup();

	//nav bar scoll action
	$('#logo').click(function() {
		$("html, body").animate({ scrollTop: $('').offset().top}, 500);
	});//clicked on top


});

$(window).resize(function() {
 	sizeitup();
});

function sizeitup() {
	var bodyh = $(window).height();
	var bodyw = $(window).width();
	if (bodyw > 650) {
		$(".top").css("height",bodyh);
		$(".top2").css("height",bodyh *.9);
		$(".top3").css("height",bodyh *.8);
	} else {
        $(".top").css("height",bodyw*.7625);
        $(".top2").css("height",bodyw*.7625);
        $(".top3").css("height",bodyw*.7625);
    }
}

$(window).scroll(function() {
	var bodyh = $(window).height();
	var pos = $(window).scrollTop();
	// var ent = $("#enterprises").offset().top + 185;
	// var tea = $("#team").offset().top - 140;
	if (pos > 0) {
		$('header').addClass('up');
	} else {
		$('header').removeClass('up');
	}
	// if (pos < ent) {
	// 	$("#ent-menu").removeClass().addClass("top");
	// } else if (pos > ent && pos < tea) {
	// 	$("#ent-menu").removeClass().addClass("move");
	// } else if (pos > tea) {
	// 	$("#ent-menu").removeClass().addClass("bot");
	// }
});

//SMOOTH SCROLLING
$(function() {
	$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html,body').animate({
					scrollTop: target.offset().top - 70
				}, 500);
				return false;
			}
		}
	});
});

$("header i.fa").click(function(){
	$("header").toggleClass("mobile");
});

// YOUTUBE STUFF 7AI9sgPN3kA

$('.play-video').click(function() {
	$('#splash').addClass('playing');
	player.seekTo(4);
	player.unMute();
});
$('.mute-video').click(function() {
	$('#splash').removeClass('playing');
	player.mute();
});

var player;
function onYouTubePlayerAPIReady() {
	player = new YT.Player('ytplayer', {
		videoId: '7AI9sgPN3kA',
		playerVars: { 'showinfo': 0, 'controls': 0 },
		events: {
			'onReady': onPlayerReady,
			'onStateChange': onPlayerStateChange
		}
	});
}

function onPlayerReady(event) {
	event.target.playVideo();
	player.mute();
}

var done = false;
function onPlayerStateChange(event) {
	if (event.data == YT.PlayerState.ENDED) {
		$('#splash').removeClass('playing');
		player.seekTo(0);
		player.mute();
	}
}