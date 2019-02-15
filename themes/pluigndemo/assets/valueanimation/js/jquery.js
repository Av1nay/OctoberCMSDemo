$(function(){
  var i;
  var lsize = $('.menu-item').length;
  var angleOfRotation = 360/lsize;
      for(i=3; i<angleOfRotation; i++){
          $(".menu-item:nth-child("+i+")").css({
              "transform": "rotate("+angleOfRotation*i+"deg) translateY("+250+"px) rotate(-"+angleOfRotation*i+"deg)",
              "transition-delay": 0.5*i+"s",
              "top":"50%",
              "left":"50%"
          });
      }
});