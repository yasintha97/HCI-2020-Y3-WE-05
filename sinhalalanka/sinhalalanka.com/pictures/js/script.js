function render(data){
	var html = "<div class ='commentBox'><div class='leftPanelImg'><img src='img/avatar2.png' /></div><div class='rightPanel'><span>"+data.name+"</span><div class='date'>"+data.date+"</div><p style='color:black;'>"+data.body+"</p></div><div class='clear'></div></div>";
	$('#container').append(html);

}

$(document).ready(function(){
var coment = [
{"name": "Nayan Tharu",   "date":  "6 Apr,2020",  "body":  "Wooow nice collection."},

];

for(var i=0;i<coment.length;i++){
	render(coment[i]);
	}
	$('#addComent').click(function(){
		var addObj ={
			"name": $('#name').val(),
			"date": $('#date').val(),
			"body":  $('#bodyText').val()
		};
		
		coment.push(addObj);
		render(addObj);
		$('#name').val('');
		$('#date').val('dd/mm/yyy');
		$('#bodyText').val('');
	});
	
});

 
var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
  

   
       