<?php
$section = '-1';
if (isset($_GET['section'])){
	$section = $_GET ['section'];
}
?>
		<ul class="navbar-nav ml-auto">
          <li class="nav-item">
			<a class="nav-link" href="index.php"<?php if ($section == '-1'){echo 'class="current"';}?>><i class="active fa fa-home"></i> Home</a>
          </li>
          <li class="nav-item">
			<a class="nav-link" href="index.php?section=about"<?php if ($section == 'about'){echo 'class="current"';}?>>About</a>
          </li>
          <li class="nav-item">
			<a class="nav-link" href="index.php?section=pro"<?php if ($section == 'pro'){echo 'class="current"';}?>>Web</a>
          </li>
		  <li class="nav-item">
			<a class="nav-link" href="index.php?section=art"<?php if ($section == 'art'){echo 'class="current"';}?>>Art</a>
          </li>
		  <li class="nav-item">
			<a class="nav-link" href="index.php?section=print"<?php if ($section == 'print'){echo 'class="current"';}?>>Print</a>
          </li>
		  <li class="nav-item">
			<a class="nav-link" href="index.php?section=contact"<?php if ($section == 'contact'){echo 'class="current"';}?>>Contact</a>
          </li>
        </ul>