<?php
/**
 * User: T.K
 * Date: 21-2-2025
 * File: oefening 4.2
 */

include "../includes/header.php";
include "../includes/nav.php";
include "../includes/functions.php";
?>
<html>
<body>
<main id="wrapper">
    <h2>
        Uitwerking oefening 4.2
    </h2>
	<?php echo CheckTrafficLight( rand(0,2), rand(-1,1) ) ?>
	<br>
	<br>
	<br>
	<?php echo ShowMenu( rand(0,7) ) ?>
</main>
</body>
</html>

