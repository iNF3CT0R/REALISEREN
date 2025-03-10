<!--
Author: T Kilic & Rob Wessels
Date: feb 2021 (oorspronkelijke datum)

Opdracht 4.1
-->



<html lang="en-us">
    <head>
        <title>
            <?php echo $title; ?>
        </title>
        <meta charset="UTF-8" >
        <meta name="viewport" content="width=device-width initial-scale=1" >
        <script src="../scripts/scriptpages.js" defer></script>
        <!-- nieuwe style -->
        <link rel="stylesheet" href="../styles/stylesheet.css">
    </head>

    <body>

        <header>
            <h1><a href='../index.php'>Al Pacino</a></h1>
            <h3>...in zijn rollen als gangster</h3>
            <h3>
                <?php
					$time=date("H");
					$groet="Goedendag";
					if ( $time <= 5 ) {
						$groet="Goedenacht";
					} else if ( $time <= 11 ) {
						$groet="Goedemorgen";
					} else if ( $time <= 17 ) {
						$groet="Goedemiddag";
					} else if ( $time <= 23 ) {
						$groet="Goedenavond";
					}
                    echo $groet . ", welkom op deze site"
                ?>
            </h3>
			<h3>
				<?php
					echo $time . date(":i");
				?>
			</h3>
        </header>

        <main>
            <nav>
                <ul id="menu_list_pages">
                    menulijst loading . . .
                </ul>
            </nav>