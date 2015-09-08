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
	console.log();
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

(function(window, document, undefined) {

  $(function() {

    var $connectVideo = $('#slam-video');

    var lastTimestamp = -1, endingSoon = false;

    function listenForEnd() {

        if(!endingSoon && $connectVideo[0].currentTime >= 304) {

          endingSoon = true;

          $('#splash').removeClass('playing');
        }

        if($connectVideo[0].currentTime < lastTimestamp) {

          $connectVideo[0].muted = true;
          $connectVideo.unbind('timeupdate', listenForEnd);
          lastTimestamp = -1;
          endingSoon = false;
          return;
        }

        lastTimestamp = $connectVideo[0].currentTime;
    }

    $('.play-video').click(function() {

      $connectVideo[0].currentTime = 0;
      $connectVideo[0].muted = false;
      $('#splash').addClass('playing');

      $connectVideo.bind('timeupdate', listenForEnd);
    });

    $('.mute-video').click(function() {

      $connectVideo[0].muted = true;
      $('#splash').removeClass('playing');

    });
  });

})(window, window.document);