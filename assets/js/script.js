
function popup(message){
	alert(message);
}
function contactWidgetAjax(form){
	$.ajax({
		type: "post",
		url: $("#contact-form").attr("action"),
		data: $("#contact-form").serializeArray(),
		dataType: "json",
		success: function(data){
			alert(data);
		},
		error: function(data){
			alert(data);
		}
	});
}
function scrollTo(div){
	$('html,body').animate({
		scrollTop: $(div).offset().top
	},'slow');
}
window.onload = function() {
	 
}
$(document).ready(
	function(){
		
		//Contact form submit
		var validator = $("#contact-form").validate({
			errorLabelContainer: ".error-div",
			rules:{
				name: {
					required: true
				},
				email: {
					required: true,
					email: true
				},
				subject:{
					required: true
				}
			},
			messages:{
				name: {
					required: "Your name is required"
				},
				email: {
					required: "Your email is required",
					email: "Email is invalid"
				},
				subject:{
					required: "Please include subject"
				}
			},
			submitHandler: function(form){
				//form.submit();
				//submit the form
				$.ajax({
					type: "post",
					url: $("#contact-form").attr("action"),
					data: $("#contact-form").serializeArray(),
					error: function(jqXHr,textStatus, errorThrown){
						alert(errorThrown);
					},
					success: function(data){
						alert(data);
					}
				});
				$("#contact-form")[0].reset();
				return false; //don't let the page refresh on submit.
				
			}
		});
		
		$(document).on("click", ".nav-link", function(){
			var divElement = $(this).attr("href");
			var url = divElement.substring(1); 
			scrollTo(divElement);
			/*if(divElement == "#contact"){
				$("#main-menu").css("background-color","#f8d650");
				$(".navbar").css("background-color","#f8d650");
			}else{
				$("#main-menu").css("background-color","inherit");
				$(".navbar").css("background-color","inherit");
			}*/
		
			//window.history.pushState("object or string", $(this).text(), "/"+url);
		});
		//Hide menu when link is clicked
		$(document).on("click", ".nav-link", function(){
			$("#navbar-menu-toggle").collapse('hide');
		});
		
	}
);