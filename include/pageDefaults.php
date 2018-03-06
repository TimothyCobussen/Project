<?php

    function getPageStart(){
        echo"<html>";
        echo"	<head>";
        echo"		<title>Rekenen doe je hier</title>";
        echo"       <link rel='stylesheet' type='text/css' href='css/style.css'";
        echo"	</head>";
        echo"	<body>";
        echo"		<header>";
        echo"			<nav>";
		echo"				<body style='background-color:#434acc'>"; 
        echo"			    <div>";
		echo"				    <a href='index.php'>";
		echo"					    Home";
		echo"				    </a>";
		echo"			    </div>";
		echo"			    <div>";
		echo"				    <a href='question_select.php'>";
		echo"					    Vragen";
		echo"				    </a>";
		echo"			    </div>";
		echo"			    <div>";
		echo"				    <a href='Explanation.php'>";
		echo"					    Uitleg";
		echo"				    </a>";
		echo"			    </div>";
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