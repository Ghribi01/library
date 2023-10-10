$(document).ready(function(){
    $('.profile').click(function(e){
      e.preventDefault();
      $('.header-container').load('./profile.php');
    })   
  });
 
 
 $(document).ready(function(){
    $('.message').click(function(){
      $('.header-container').load('./message.php');
    })   
  });

$(document).ready(function(){
  $('.manage').click(function(e){
     e.preventDefault();
     $('.header-container').load('./students.php');
  })

});
$(document).ready(function(){
  $('.all').click(function(e){
    e.preventDefault();
    $('.header-container').load('./book.php');
  })
})

$(document).ready(function(){
  $('.addb').click(function(e){
    e.preventDefault();
    $('.header-container').load('./addbook.php');
  })
})
$(document).ready(function(){
  $('.recbook').click(function(e){
    e.preventDefault();
    $('.header-container').load('./recommands.php');
  })
})