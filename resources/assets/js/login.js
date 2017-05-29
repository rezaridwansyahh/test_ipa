$("#ipa-login").validate({
	highlight: function(element) {
        $(element).closest('p.input-required').addClass('has-error');
    },
    unhighlight: function(element) {
        $(element).closest('p.input-required').removeClass('has-error');
    },
    errorElement: 'span',
  	rules: {
    	email: {
      		required: true,
      		email: true
    	},
    	password: {
      		required: true,
      		minlength: 3
    	}
    }
});