
$("#tab_top_1").click(function(){
  $('#tab_top_1').css('color', 'none');
  $('#tab_top_2').css('color', '#000000');
  $('#tab_top_3').css('color', '#000000');

  $('#club_1').css('display', 'block');
  $('#club_2').css('display', 'none');
  $('#club_3').css('display', 'none');
});

$("#tab_top_2").click(function(){
  $('#tab_top_2').css('color', 'none');
  $('#tab_top_1').css('color', '#000000');
  $('#tab_top_3').css('color', '#000000');

  $('#club_2').css('display', 'block');
  $('#club_1').css('display', 'none');
  $('#club_3').css('display', 'none');
});

$("#tab_top_3").click(function(){
  $('#tab_top_3').css('color', 'none');
  $('#tab_top_2').css('color', '#000000');
  $('#tab_top_1').css('color', '#000000');

  $('#club_3').css('display', 'block');
  $('#club_2').css('display', 'none');
  $('#club_1').css('display', 'none');
});
