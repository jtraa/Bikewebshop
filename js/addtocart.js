$(document).ready(function(){
  $(".bg-3").click(function(){
    if($(this).hasClass("in-cart")){
      $(this).removeClass("in-cart").text("Add to cart");;
    }
    else {
      var btn = $(this);
      btn.addClass("anim").text("Adding...");
      
      setTimeout(function(){
        btn.removeClass("anim").addClass("in-cart").text("In cart");
      }, 2000)
    }
  });
});