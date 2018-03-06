<?php
include_once "include/pageDefaults.php";
getPageStart();
?>
    <div>
        <form action="questions.php" method="get" class="question_selector">
            <div class="difficulty_selector">
                <h2>Selecteer de moeilijkheidsgraad</h2>
                <div>
                    <div>
                        <label><input type="radio" name="difficulty" value="0" required>Makkelijk</label>
                    </div>
                    <div>
                        <label><input type="radio" name="difficulty" value="1" required>Gemiddeld</label>
                    </div>
                    <div>
                        <label><input type="radio" name="difficulty" value="2" required>Moelijk</label>
                    </div>
                </div>
            </div>

            <div class="question_type_selector">
                <h2>Selecteer het type som</h2>
                <div>
                    <label>
                        <div>
                            <input type="radio" name='questionType' value="1" required>
                            +
                        </div>
                    </label>
                    <label>
                        <div>
                            <input type="radio" name='questionType' value="2" required>
                            -
                        </div>
                    </label>
                    <label>
                        <div>
                            <input type="radio" name='questionType' value="3" required>
                            *
                        </div>
                    </label>
                    <label>
                        <div>
                            <input type="radio" name='questionType' value="4" required>
                            :
                        </div>
                    </label>
                    <label>
                        <div>
                            <input type="radio" name='questionType' value="5" required>
                            ²
                        </div>
                    </label>
                    <label>
                        <div>
                            <input type="radio" name='questionType' value="6" required>
                            √
                        </div>
                    </label>
                    <label>
                        <div>
                            <input type="radio" name='questionType' value="0" required>
                            willekeurig
                        </div>
                    </label>
                </div>
            </div>
            <div class="question_amount">
                <h2>Hoeveel vragen?</h2>
                <input type="number" name="numQuestions">
            </div>
            <button type="submit">GA!</button>
        </form>
    </div>

<?php
getPageEnd();
?>