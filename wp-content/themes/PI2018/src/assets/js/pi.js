
function moveHArrow() {

  $("img.arrow").css({
    'transition': 'none',
    'opacity': 0.3,
    'margin': '0 50px 0 -80px'
  });
  setTimeout( function() {
      $("img.arrow").css({
        'transition': 'all 0.25s ease-in',
        'opacity': 1,
        'margin': '0 0 0 -30px'
      });
    }, 300);
}

function moveVArrow() {

  $("img.v-arrow").css({
    'transition': 'none',
    'opacity': 0.3,
    'margin': '-20px -90px'
  });
  setTimeout( function() {
      $("img.v-arrow").css({
        'transition': 'all 0.25s ease-in',
        'opacity': 1,
        'margin': '-50px -90px'
      });
    }, 300);
}

$(window).scroll(function() {
  var ST = parseInt($(this).scrollTop());
  var TFOOTER = $(".footer").offset().top;
  /* HOME PAGE */
  if($("#cat-news-container").length > 0 ) {
    //console.log(ST);
    if(ST > 450 && ST < 550) {
      moveHArrow();
    }

    var SBH = parseInt($("#sb-promo").css("height"));
    var CNTH = parseInt($("#cat-news-container").css("height"));
    var CNTSTART = $("#cat-news-container").offset().top;
    var CNTEND = CNTSTART + parseInt($("#cat-news-container").css("height"));
    var MAXH = CNTEND - SBH  ;

    if(ST > CNTSTART && ST < MAXH) {
      moveVArrow();
      $("#sb-promo").css("position", "fixed");
      $("#sb-promo").css("top", 81);
    } else if(ST >= MAXH) {
      $("#sb-promo").css("position", "absolute");
      $("#sb-promo").css("top", MAXH);
    } else {
      $("#sb-promo").css("position", "absolute");
      $("#sb-promo").css("top", CNTSTART);
    }
  }

  if($("#share-bar").length > 0 ) {
    var TBAR = $("#share-bar").offset().top
    var BBAR = TBAR + parseInt($("#share-bar").css("height")) + 10 ;
    var WH = parseInt( $(window.top).height());
    var BH = parseInt( $("#share-bar").css("height")) + 190;
    if( (ST+BH) > TFOOTER ) {
      $("#share-bar").css("top", "auto");
      var BOTTOM =  WH - BH + ((ST+BH)-TFOOTER) + 10;
      console.log(WH + " " + BH + " " +BOTTOM);
      $("#share-bar").css("bottom", BOTTOM);
    } else {
      $("#share-bar").css("bottom", "auto");
      $("#share-bar").css("top", "190px");
    }
  }

});

$(".cerca").click( function() {
  //$(".desktop-menu").css("display", "none");
  //$(".srctxt").css("display", "block");
  //$(".srctxt").focus();
});

$(document).keyup(function(e){
    if(e.keyCode === 27) {
        $(".desktop-menu").css("display", "flex");
        $(".srctxt").css("display", "none");
    }
});


$(document).on('sticky.zf.stuckto:top', function(){
  $(".leaderboard").addClass('stucked');
  $(".logobox").addClass('stucked');
  $(".top-menu-bar").addClass('stucked');
  $(".site-header").addClass('stucked');
}).on('sticky.zf.unstuckfrom:top', function(){
  $(".logobox").removeClass('stucked');
  $(".leaderboard").removeClass('stucked');
  $(".top-menu-bar").removeClass('stucked');
  $(".site-header").removeClass('stucked');
});


$(document).ready(function () {
  if($("#agenda").length > 0) {
    $("#agenda").MEC({calendar_link: "#", events: EVENTI});
    /* posizionamento banner verticale */
    var T = $("#cat-news-container").offset().top;
    var L = $("#cat-news-container").offset().left;
    $("#sb-promo").css("top", T+67);
    $("#sb-promo").css("right", L);
  }
});


$(".calBack").click( function(e) {
  e.preventDefault();
  $(".eventi").animate({
    "opacity": 0,
  }, 500, function() {
    $("#agenda").css("display", "block");
    $(".eventi").css("display", "none");
    $("#agenda").animate({
      "opacity": "1" }, 500 )});
});

$(".arretrati .item").click( function() {
  var coverIMG = $(".cover img").eq(0).attr("src");
  var coverNR = $(".cover .numero").html();
  $(".cover img").eq(0).attr("src", $(this).find("img").attr("src"));
  $(".cover .numero").html($(this).find(".numero").html());
  $(this).find("img").attr("src", coverIMG);
  $(this).find(".numero").html(coverNR);
});
