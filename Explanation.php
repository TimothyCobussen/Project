<?php
	include_once "include/pageDefaults.php";
	getPageStart();
?>

                <div>
                    <div>
                        <input type="radio" name='questionType' value="1" required>
                        √
                    </div><div>
                        <input type="radio" name='questionType' value="2" required>
                        ²
                    </div><div>
                        <input type="radio" name='questionType' value="3" required>
                        *
                    </div><div>
                        <input type="radio" name='questionType' value="4" required>
                        :
                    </div>
                </div>
				
<?php
	getPageEnd();
?>