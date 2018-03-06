<?php

    function getPageStart(){
        echo"<html>";
        echo"	<head>";
        echo"		<title>Rekenen doe je hier</title>";
        echo"       <link rel='stylesheet' type='text/css' href='css/style.css'";
        echo"	</head>";
        echo"	<body>";
        echo"		<header>";
        echo"			<div>";
		echo"				<a href='index.php'>";
		echo"					Home";
		echo"				</a>";
		echo"			</div>";
        echo"		</header>";
        echo"		<main>";
    }

    function getPageEnd(){
        echo"       </main>";
        echo"       <footer>";
        echo"       ";
        echo"       </footer>";
        echo"   </body>";
        echo"</html>";
    }
?>