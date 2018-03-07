<?php

    function getPageStart(){
        echo"<html>";
        echo"	<head>";
        echo"		<title>Rekenen doe je hier</title>";
        echo"       <link rel='stylesheet' type='text/css' href='css/style.css'>";
        echo"	</head>";
        echo"	<body>";
        echo"		<header>";
        echo"			<nav>";
        echo"				<a href='index.php'>";
        echo"			        <div>";
		echo"					    Home";
		echo"			        </div>";
        echo"				</a>";
        echo"				<a href='question_select.php'>";
		echo"			        <div>";
		echo"					    Vragen";
        echo"			        </div>";
		echo"				</a>";
		echo"			</nav>";
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