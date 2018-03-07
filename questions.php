<?php
include_once "include/pageDefaults.php";
include_once "include/questionFunctions.php";
getPageStart();
?>
<div>
    <script type="text/javascript" src="js/question.js"></script>
    <?php
    getQuestions();
    ?>


</div>

<?php
getPageEnd();
?>