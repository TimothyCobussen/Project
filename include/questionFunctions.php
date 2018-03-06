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
            $value2 = rand(1,1000);
            $value1 = rand(1,1000)*$value2;
        }
        else if($difficulty == 1){
            $value2 = rand(1,100);
            $value1 = rand(1,100)*$value2;
        }
        else{
            $value2 = rand(1,20);
            $value1 = rand(1,20)*$value2;
        }
        displayQuestion($questionNum, $value1, ":",$value2);
    }

    function getPositivePowerQuestion($questionNum, $difficulty=0){
        if($difficulty == 2){
            $value1 = rand(1,100);
        }
        else if($difficulty == 1){
            $value1 = rand(1,20);
        }
        else{
            $value1 = rand(1,10);
        }
        displayPowerQuestion($questionNum, $value1, "²");
    }

    function getPositiveRootQuestion($questionNum, $difficulty=0){
        if($difficulty == 2){
            $value1 = rand(1,100);
        }
        else if($difficulty == 1){
            $value1 = rand(1,20);
        }
        else{
            $value1 = rand(1,10);
        }
        $value1 = $value1*$value1;
        displayRootQuestion($questionNum,"√", $value1);
    }

    function getRandomQuestion($questionNum, $difficulty=0){
        switch (rand(1,6)){
            case 1: getPositiveAdditionQuestion($questionNum, $difficulty); break;
            case 2: getPositiveSubtractionQuestion($questionNum, $difficulty); break;
            case 3: getPositiveMultiplicationQuestion($questionNum, $difficulty); break;
            case 4: getPositiveDivisionQuestion($questionNum, $difficulty); break;
            case 5: getPositivePowerQuestion($questionNum, $difficulty); break;
            case 6: getPositiveRootQuestion($questionNum, $difficulty); break;
        }

    }

    function displayQuestion($questionNum, $value1,$modifier1,$value2){
	    echo "<div class='question_single_container'>";
        echo "    <div><input type='hidden'  value='" . $value1 . "' class='value'> ".$value1." </div>";
        echo "    <div><input type='hidden' value='".$modifier1."' class='modifier'> ".$modifier1." </div>";
        echo "    <div><input type='hidden' value='" . $value2 . "' class='value'> ".$value2." </div>";
        echo "    <div> = </div>";
        echo "    <div><input type='number' class='answer'></div>";
        echo "</div>";
    }

    function displayPowerQuestion($questionNum, $value1, $modifier1){
        echo "<div class='question_single_container'>";
        echo "    <div><input type='hidden'  value='" . $value1 . "' class='value'> ".$value1." </div>";
        echo "    <div><input type='hidden' value='".$modifier1."' class='modifier'> ".$modifier1." </div>";
        echo "    <div> = </div>";
        echo "    <div><input type='number' class='answer'></div>";
        echo "</div>";
    }

    function displayRootQuestion($questionNum, $modifier1, $value1){
	    echo "<div class='question_single_container'>";
        echo "    <div><input type='hidden' value='".$modifier1."' class='modifier'> ".$modifier1." </div>";
        echo "    <div><input type='hidden'  value='" . $value1 . "' class='value'> ".$value1." </div>";
        echo "    <div> = </div>";
        echo "    <div><input type='number' class='answer'></div>";
        echo "</div>";
    }



    function getQuestions(){
	    if($_GET['numQuestions']==null){
            $_GET['numQuestions'] = 10;
        }
        if($_GET['numQuestions'] < 5 || $_GET['numQuestions'] > 100){
            $_GET['numQuestions'] = 10;
        }


        if($_GET['difficulty']==null){
            $_GET['difficulty'] = 2;
        }else if($_GET['difficulty']<>0 && $_GET['difficulty']<>1 && $_GET['difficulty']<>2){
            $_GET['difficulty'] = 2;
        }

        echo" <div class='questions_container''>";
	    if($_GET['questionType']=='1'){
            for($i=0;$i<$_GET['numQuestions'];$i++){
                getPositiveAdditionQuestion($i,$_GET['difficulty']);
            }
        }else if($_GET['questionType']=='2'){
            for($i=0;$i<$_GET['numQuestions'];$i++){
                getPositiveSubtractionQuestion($i,$_GET['difficulty']);
            }
        }else if($_GET['questionType']=='3'){
            for($i=0;$i<$_GET['numQuestions'];$i++){
                getPositiveMultiplicationQuestion($i,$_GET['difficulty']);
            }
        }else if($_GET['questionType']=='4'){
            for($i=0;$i<$_GET['numQuestions'];$i++){
                getPositiveDivisionQuestion($i,$_GET['difficulty']);
			}
        }else if($_GET['questionType']=='5'){
            for($i=0;$i<$_GET['numQuestions'];$i++){
                getPositivePowerQuestion($i,$_GET['difficulty']);
			}
        }else if($_GET['questionType']=='6'){
            for($i=0;$i<$_GET['numQuestions'];$i++){
                getPositiveRootQuestion($i,$_GET['difficulty']);
			}
        }else{
            for($i=0;$i<$_GET['numQuestions'];$i++){
                getRandomQuestion($i,$_GET['difficulty']);
            }
        }

        echo "</div>";
    }


?>