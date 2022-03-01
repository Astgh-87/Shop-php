$(document).ready(function() {
  function change($tr, val) {
    var $input = $tr.find('.quantity');
    var count = parseInt($input.val()) + val;
    count = count < 1 ? 1 : count;
    $input.val(count);
    var $price = $tr.find('.count_price');
    $price.text(count * $price.data('price'));
  }
  $('.minus').click(function() {
    change($(this).closest('tr'), -1);
  });
  $('.plus').click(function() {
    change($(this).closest('tr'), 1);
  });
 
  $('.quantity').on("input", function() {
    var $price = $(this).closest('tr').find('.count_price');
    $price.text(this.value * $price.data('price'));
   
  });

});

 

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
 
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  
  }
  slides[slideIndex-1].style.display = "block";  ;


  var slides = document.getElementsByClassName("mySlides 2");
   if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
}
  slides[slideIndex-1].style.display = "block";  ;


  var slides = document.getElementsByClassName("mySlides 3");
   if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
}
  slides[slideIndex-1].style.display = "block"; 



  var slides = document.getElementsByClassName("mySlides 4");
   if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
}
  slides[slideIndex-1].style.display = "block";  

  var slides = document.getElementsByClassName("mySlides 5");
   if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
}
  slides[slideIndex-1].style.display = "block";  

  var slides = document.getElementsByClassName("mySlides 6");
   if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
}
  slides[slideIndex-1].style.display = "block";  

  var slides = document.getElementsByClassName("mySlides 7");
   if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
}
  slides[slideIndex-1].style.display = "block";  ;
}

