$(document).ready(function(){
	var sel = $("#sel");
   var a   = $(".a1");
   var l   = $(".a1 l");

   sel.on("click",function(event){
    	event.preventDefault();
    	var value= $("#sel option:selected").val();
    	$.ajax({
    		url:"file.php",
            method:'post',
            dataType:'json',
            data:{
               selval:value
            }
}).done(function(data){
  a.eq(0).html(data['Home']);
  a.eq(1).html(data['Blog']);
  a.eq(2).html(data['Fruits']);
  a.eq(3).html(data['Driedfruits']);
  a.eq(4).html(data['Vegetables']);
  a.eq(5).html(data['Nuts']);
  a.eq(6).html(data['Candy']);
  a.eq(7).html(data['Waffle']);
  a.eq(8).html(data['Cake']);
  a.eq(9).html(data['Registration']);
  a.eq(10).html(data['Login']);
  a.eq(11).html(data['Login']);
  a.eq(12).html(data['Myaccount']);
  a.eq(13).html(data['Contactus']);
  a.eq(14).html(data['SOCIALS']);
  a.eq(15).html(data['©2022AllRightsReserved.']);


})
    		   	})


   l.on("click",function(event){
      event.preventDefault();
      function change($ul, val) {
      var $m = $ul.find('.in');
      $m.html('Log out');
   }
    })

  $('.up').onclick(function() {
   ("p1").hidden("");
    })
   
  });



