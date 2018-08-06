var YT = '<iframe src="URL?autoplay=1&rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
var VM = '<iframe src="URL?autoplay=1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen allow="autoplay; encrypted-media"></iframe>';
var HTML = '<video autoplay controls><source src="URL" type="video/mp4"></video>';


$("#video-gallery .player").click( function(e) {
  e.preventDefault();
  // Get type
  var str = "";
  if($(this).hasClass('yt')) { str = YT; }
  if($(this).hasClass('vm')) { str = VM; }
  if($(this).hasClass('url')) { str = HTML; }
  var res = str.replace("URL", $(this).attr("href"));

  if( $(this).parent().hasClass('vr-box') ) {
    /* scambio video */
    var selH = $(this).attr("href");
    var selC = $(this).attr("class");
    var selI = $(this).find("img").attr("src");
    var selT = $(this).find("h4").html();

    //console.log(selH + " " +selC + " " +selI + " " +selT)

    $(this).attr("href", $(".icon-overlay a").attr("href") );
    $(this).attr("class",   $(".icon-overlay a").attr("class") );
    $(this).find("img").attr("src", $(".video-box img").attr("src") );
    $(this).find("h4").html($(".video-title h3").html() );

    $(".icon-overlay > a").attr("class", selC);
    $(".icon-overlay > a").attr("href", selH);
    $(".video-box img").attr("src", selI);
    $(".video-title h3").html(selT);
  }

  /* visualizzazione player */
  $(".player-container").html(res);
  $(".icon-overlay").css("display", "none");
  $(".player-container").css("display", "block");

});


$(".articolo .video .player").click( function(e) {
  e.preventDefault();
  // Get type
  var str = "";
  if($(this).hasClass('yt')) { str = YT; }
  if($(this).hasClass('vm')) { str = VM; }
  if($(this).hasClass('url')) { str = HTML; }
  var res = str.replace("URL", $(this).attr("href"));

  /* visualizzazione player */
  $(".player-container").html(res);
  $(".icon-overlay").css("display", "none");
  $(".player-container").css("height", $(".video").css("height") );
  $(".player-container").css("display", "block");

});
