
var APP = {
	doVolPlus: function() {
		$('#vol_plus').on('click', function(e) {
			e.preventDefault();
			var url = $(this).data('url');
			$.get(url, function(data) {
			
			});
		});
	},
	
	doVolMinus: function() {
		$('#vol_minus').on('click', function(e) {
			e.preventDefault();
			var url = $(this).data('url');
			$.get('/vol_minus/', function(data) {
			
			});
		});
	},
	
	doGibernation: function() {
		$('#gibernation').on('click', function(e) {
			e.preventDefault();
			if (confirm('You have gibernation?')) {
				var url = $(this).data('url');
				$.get(url, function(data) {
				
				});
			}
		});
	},
	
	doShutdown: function() {
		$('#shutdown').on('click', function(e) {
			e.preventDefault();
			if (confirm('You have shutdown?')) {
				var url = $(this).data('url');
				$.get(url, function(data) {
				
				});
			}
		});
	}
}

$(function() {
	APP.doVolPlus();
	APP.doVolMinus();
	APP.doGibernation();
	APP.doShutdown();
})

  
	
	
	
	
	
	