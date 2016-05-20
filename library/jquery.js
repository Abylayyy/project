var main = function() {
  $('.java').mouseover(function() {
    $(this).fadeOut("normal");
  });

  $('.error').click(function(){
    $(this).slideUp("normal");
  });

  $('.false').click(function() {
    $(this).fadeOut("normal");
  })

  $('.seek').mouseover(function() {
    $(this).fadeOut("slow");
  })

  $('#1').click(function() {
    $(this).remove();
  })
}
$(document).ready(main);
