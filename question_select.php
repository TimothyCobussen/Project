<?php
include_once "include/pageDefaults.php";
getPageStart();
?>
    <div>
        <form action="questions.php" method="post">
            <div>
                <h2>Selecteer de moeilijkheidsgraad</h2>
                <div>
                    <div>
                        <input type="radio" name="difficulty" value="0">
                        Makkelijk
                    </div>
                    <div>
                        <input type="radio" name="difficulty" value="1">
                        Gemiddeld
                    </div>
                    <div>
                        <input type="radio" name="difficulty" value="2">
                        Moelijk
                    </div>
                </div>
            </div>

            <div>
                <h2>Selecteer het type som</h2>
                <div>
                    <div>
                        <input type="radio" name='questionType' value="1" required>
                        +
                    </div><div>
                        <input type="radio" name='questionType' value="2" required>
                        -
                    </div><div>
                        <input type="radio" name='questionType' value="3" required>
                        *
                    </div><div>
                        <input type="radio" name='questionType' value="4" required>
                        :
                    </div><div>
                        <input type="radio" name='questionType' value="0" required>
                        willekeurig
                    </div>
                </div>

                <div>
                    <h2>Hoeveel vragen?</h2>
                    <input type="number" name="numQuestions">
                </div>
            </div>
            <button type="submit">GA!</button>
        </form>
    </div>

<?php
getPageEnd();
?>