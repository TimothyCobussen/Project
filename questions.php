<?php
include_once "include/pageDefaults.php";
include_once "include/questionFunctions.php";
getPageStart();
?>
<div>
    <form>
        <div class="questions_container">
            <?php
                for($i=0;$i<10;$i++){
                    getPositiveSumQuestion($i,0);
                }

            ?>

        </div>
    </form>
</div>

<?php
getPageEnd();
?>