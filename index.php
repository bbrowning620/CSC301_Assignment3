<?php

require_once('functions.php');

$list = jsonToArray('data.json');

$title='All Guests';

require_once('header.php');
?>

  	<div class="container">
    <h1>RSVP List</h1>
    <?php
    	for($i=0; $i<count($list); $i++){

    		echo '<div class="media">

  			<div class="media-body">

    		<h5 class="mt-0">'.$list[$i]['name'].'</h5>

			<p><a href="detail.php?id='.$i.'">Click to see details</a></p>

  	</div>
  </div>';
    	}
    ?>
</div>

<?php
  require_once('footer.php');