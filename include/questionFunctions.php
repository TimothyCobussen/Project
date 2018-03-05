<?php
	function getPositiveAdditionQuestion($questionNum, $difficulty=0){
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

    function getPositiveMultiplicationQuestion($questionNum, $difficulty=0){
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
        displayQuestion($questionNum, $value1, "*",$value2);
    }

    function getPositiveDivisionQuestion($questionNum, $difficulty=0){
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
        displayQuestion($questionNum, $value1, ":",$value2);
    }

    function getRandomQuestion($questionNum, $difficulty=0){
        switch (rand(1,4)){
            case 1: getPositiveAdditionQuestion($questionNum, $difficulty); break;
            case 2: getPositiveSubtractionQuestion($questionNum, $difficulty); break;
            case 3: getPositiveMultiplicationQuestion($questionNum, $difficulty); break;
            case 4: getPositiveDivisionQuestion($questionNum, $difficulty); break;
        }

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

    function getQuestions(){
	    if($_POST['numQuestions']==null){
            $_POST['numQuestions'] = 10;
        }
        if($_POST['numQuestions'] < 5 || $_POST['numQuestions'] > 100){
            $_POST['numQuestions'] = 10;
        }


        if($_POST['difficulty']==null){
            $_POST['difficulty'] = 2;
        }else if($_POST['difficulty']<>0 || $_POST['difficulty']<>1 || $_POST['difficulty']<>2){
            $_POST['difficulty'] = 2;
        }

        echo" <div class='questions_container''>";
	    if($_POST['questionType']=='1'){
            for($i=0;$i<$_POST['numQuestions'];$i++){
                getPositiveAdditionQuestion($i,$_POST['difficulty']);
            }
        }else if($_POST['questionType']=='2'){
            for($i=0;$i<$_POST['numQuestions'];$i++){
                getPositiveSubtractionQuestion($i,$_POST['difficulty']);
            }
        }else if($_POST['questionType']=='3'){
            for($i=0;$i<$_POST['numQuestions'];$i++){
                getPositiveMultiplicationQuestion($i,$_POST['difficulty']);
            }
        }else if($_POST['questionType']=='4'){
            for($i=0;$i<$_POST['numQuestions'];$i++){
                getPositiveDivisionQuestion($i,$_POST['difficulty']);
            }
        }else{
            for($i=0;$i<$_POST['numQuestions'];$i++){
                getRandomQuestion($i,$_POST['difficulty']);
            }
        }

        echo "</div>";
    }


?>