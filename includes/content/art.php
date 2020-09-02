
<div class="art-bg">
	<div class="container mt-5">
		<div>
			<div id="photos" class="row pb-5"></div>
		</div>
	</div>
</div>


<script>
var i;
var images = "";
for (i = 1; i < 7; i++) {
  images += '<div class="col-md-4"><div class="container-base"><a href="images/drawings/big/big-img' + [i] + '.jpg" data-fancybox="group1"><img src="images/drawings/img' + [i] + '.jpg" class="w-100 r-border mb-5" /><div class="middle"><div class="text"><i>Click <b>image</b> to enlarge</i></div></div></a></div></div>';
}

photos.innerHTML = images
</script>


