<?php
include_once "include/pageDefaults.php";
include_once "include/questionFunctions.php";
getPageStart();
?>
<div>
    <form>
        <?php
            getQuestions();
        ?>
    </form>
</div>

<?php
getPageEnd();
?>