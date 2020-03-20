<?php

        $pingAddress = $_POST['pingAddress'];

	exec("ping -c 4 " . $pingAddress, $output);
	echo "<pre>";
	foreach($output as $result) {
		echo $result, '<br>';
	}
	echo "</pre>";
?>
