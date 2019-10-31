$(document).ready(() => {
  $(".navbar .head[dest]").each((i,head) => {
    $(head).click(() => {
      var id="#"+$(head).attr("dest");
      var top=$(id).offset().top-$(".navbar").height()-50;
      $("body,html").animate({scrollTop:(top>0?top:0)},200);
    });
  });

  $(".navbar .icon").click(() => {
    $("body,html").animate({scrollTop:0},200);
  });
});
