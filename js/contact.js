/*
  Jquery Validation using jqBootstrapValidation
   example is taken from jqBootstrapValidation docs 
*/
$(function() {
  	$('form[name="sentMessage"]').find('input,select,textarea').not('[type=submit]').jqBootstrapValidation({
  		/*
	    preventSubmit: true,
	    submitError: function($form, event, errors) {
	    // something to have when submit produces an error ?
	    // Not decided if I need it yet
	    },
	    submitSuccess: function($form, event) {
			//event.preventDefault(); // prevent default submit behaviour
	  	  	$.ajax({
				url: $form.attr('action'),
				type: "POST",
				data: $form.serialize(),
				cache: false,
				success: function(data) {  
					// just to confirm ajax submission
					console.log('submitted successfully!');
					//clear all fields
					$('#contactForm').trigger("reset");
				},
				error: function(data) {		
					// just to confirm ajax submission
					console.log('Message could not submitted successfully!');
					//clear all fields
					$('#contactForm').trigger("reset");
	        	}
	      	})
	    },
	    filter: function() {
	        return $(this).is(":visible");
	    }
		*/
  	});
	$("a[data-toggle=\"tab\"]").click(function(e) {
	            e.preventDefault();
	            $(this).tab("show");
	});
});
 

/*When clicking on Full hide fail/success boxes */ 
$('#name').focus(function() {
     $('#success').html('');
});
