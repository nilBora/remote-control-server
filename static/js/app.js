
var APP = {
	doVolPlus: function() {
		$('#vol_plus').on('click', function(e) {
			e.preventDefault();
			$.get('/vol_plus/', function(data) {
			
			});
		});
	},
	
	doVolMinus: function() {
		$('#vol_minus').on('click', function(e) {
			e.preventDefault();
			$.get('/vol_minus/', function(data) {
			
			});
		});
	},
	
	doGibernation: function() {
		$('#gibernation').on('click', function(e) {
			e.preventDefault();
			if (confirm('You have gibernation?')) {
				$.get('/gibernation/', function(data) {
				
				});
			}
		});
	},
	
	doShutdown: function() {
		$('#shutdown').on('click', function(e) {
			e.preventDefault();
			if (confirm('You have shutdown?')) {
				$.get('/shutdown/', function(data) {
				
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

  
	
	
	
	
	
	