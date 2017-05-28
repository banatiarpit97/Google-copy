$(document).ready(function(){
 $(".gmail, .images").css("color", "black");
 $(".advertising, .business, .about, .privacy, .terms, .settings").css("color", "grey");
 
}); 

$(".privacy, .terms, .settings").mousedown(function(){
 	$(this).css("color", "red");
 });

$(".privacy, .terms, .settings").mouseup(function(){
 	$(this).css("color", "grey");
 })


