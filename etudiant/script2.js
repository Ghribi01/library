$(document).ready(function(){
    $('.prfl').click(function(e){
      e.preventDefault();
      $('.header-container2').load('./profile1.php');
    })   
  });

  $(document).ready(function(){
    $('.message').click(function(e){
      e.preventDefault();
      $('.header-container2').load('./message.php');
    })   
  });

  $(document).ready(function(){
    $('.bks').click(function(e){
      e.preventDefault();
      $('.header-container2').load('./book.php');
    })
  })
  $(document).ready(function(){
    $('.re').click(function(e){
      e.preventDefault();
      $('.header-container2').load('./recommand.php');
    })
  })
  $(document).ready(function(){
    $('.recbook').click(function(e){
      e.preventDefault();
      $('.header-container2').load('./recommands.php');
    })
  })