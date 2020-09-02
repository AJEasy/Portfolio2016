function _(x){return document.getElementById(x);}
		var ba, bi=0, intrvl;
		var bca = ['<img src="images/travel-1.jpg" class="w-100" alt="Professional Work" />',
		'<img src="images/travel-2.jpg" class="w-100" alt="Professional Work" />',
		'<img src="images/travel-3.jpg" class="w-100" alt="Professional Work" />',
		'<img src="images/travel-4.jpg" class="w-100" alt="Professional Work" />'];
		
		function bubbles(bi){
			_("hpg").style.transition = "opacity 4s ease-out 1s";
			_("hpg").style.opacity = 0;
			
			for(var i=0; i < ba.length; i++){
				ba[i].style.background = "rgba(0,0,0,.1)";
			}
			ba[bi].style.background = "#999";
			setTimeout(function(){
				_("hpg").innerHTML = bca[bi];
				_("hpg").style.transition = "opacity 4s ease-in 1s";
				_("hpg").style.opacity = 1;
			}, 3550);
		}
		
		function bubbleSlide(){
			bi++; 
			if(bi == ba.length){
				bi = 0; 
			}
			
			bubbles(bi);
		}
		window.addEventListener("load", function(){
			
			ba = _("bubbles").children;
			intrvl = setInterval(bubbleSlide, 7000);
		});