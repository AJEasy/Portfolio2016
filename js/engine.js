var logo1 = $('#img1');
var logo2 = $('#img3');
	$(function(){
				logo1.animate({ rt: 0 })
					logo1.animate({ rt: 110360 },{
						duration: 900000,
						step: function(now){
							logo1.css('transform', 'rotate(' + now + 'deg)');
						}
					});
				
				setInterval(function(){
					logo1.animate({ rt: 0 })
							logo1.animate({ rt: 110360 },{
							duration: 900000,
							step: function(now){
								logo1.css('transform', 'rotate(' + now + 'deg)');
								}
						
						});
				}, 900500);		
	});
	
	$(function(){
				logo2.animate({ rt: 0 })
					logo2.animate({ rt: 110360 },{
						duration: 900000,
						step: function(now){
							logo2.css('transform', 'rotate(' + now + 'deg)');
						}
					});
				
				setInterval(function(){
					logo2.animate({ rt: 0 })
							logo2.animate({ rt: 110360 },{
							duration: 900000,
							step: function(now){
								logo2.css('transform', 'rotate(' + now + 'deg)');
								}
						
						});
				}, 900500);		
	});