
<div class="print-bg">
	<div class="container mt-5">
		<div>
			<div id="photosPrint" class="row pb-5"></div>
			
		</div>
	</div>
</div>


<script>
var j;
var imagesP = "<div class='col-md-4'><a href='index.php?section=cc'<?php if ($section == 'cc'){echo 'class="current"';} ?>><img src='images/carolina-c.jpg' class='w-100 r-border mb-5'/></a></div>";
for (j = 1; j < 9; j++) {
  imagesP += '<div class="col-md-4"><div class="container-base"><a href="images/print/bigprint/big-print' + [j] + '.jpg" data-fancybox="group2"><img src="images/print/img' + [j] + '.jpg" class="w-100 r-border mb-5" /><div class="middle"><div class="text"><i>Click <b>image</b> to enlarge</i></div></div></a></div></div>';
}

photosPrint.innerHTML = imagesP
</script>