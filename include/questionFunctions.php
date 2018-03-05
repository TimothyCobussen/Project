<?php
	function getPositiveSumQuestion($questionNum, $difficulty=0){
        if($difficulty == 2){
            $value1 = rand(1,1000);
            $value2 = rand(1,1000);
        }
        else if($difficulty == 1){
            $value1 = rand(1,100);
            $value2 = rand(1,100);
        }
        else{
            $value1 = rand(1,20);
            $value2 = rand(1,20);
        }
        displayQuestion($questionNum, $value1, "+",$value2);
    }

    function getPositiveSubtractionQuestion($questionNum, $difficulty=0){
        if($difficulty == 2){
            $value1 = rand(1,1000);
            $value2 = rand(1,1000);
        }
        else if($difficulty == 1){
            $value1 = rand(1,100);
            $value2 = rand(1,100);
        }
        else{
            $value1 = rand(1,20);
            $value2 = rand(1,20);
        }
        displayQuestion($questionNum, $value1, "-",$value2);
    }

    function displayQuestion($questionNum, $value1,$modifier1,$value2){
	    echo "<div class='question_single_container'>";
        echo "    <div><input type='hidden' value='" . $value1 . "' name='question".$questionNum."value1'> ".$value1." </div>";
        echo "    <div><input type='hidden' value='".$modifier1."' name='question".$questionNum."modifier1'> ".$modifier1." </div>";
        echo "    <div><input type='hidden' value='" . $value2 . "' name='question".$questionNum."value2'> ".$value2." </div>";
        echo "    <div> = </div>";
        echo "    <div><input class='answer' type='number' name='question".$questionNum."answer'></div>";
        echo "</div>";
    }
?>