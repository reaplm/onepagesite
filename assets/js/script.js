
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
		// popovers Initialization
		$('[data-toggle="popover"]').popover();
		
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
		});
		
		$(document).click(function(){
			//Hide menu when link is clicked
			$("#navbar-menu-toggle").collapse('hide');
			//Hide popup on click
			$(".popover").popover('hide');
		});

	
		
	}
);