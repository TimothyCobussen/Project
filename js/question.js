function checkAnswers() {
    var questions = document.getElementsByClassName('question_single_container');

    for(var i=0;i<questions.length;i++){
        if(questions[i].getElementsByClassName("modifier")[0].value==null){
            setAnswerResult(
                questions[i].getElementsByClassName("answer")[0],false);
        }else{
            switch(questions[i].getElementsByClassName("modifier")[0].value){
                case "+":
                    setAnswerResult(
                        questions[i].getElementsByClassName("answer")[0],
                        (parseInt(questions[i].getElementsByClassName("value")[0].value) + parseInt(questions[i].getElementsByClassName("value")[1].value)) == parseInt(questions[i].getElementsByClassName("answer")[0].value)
                    );
                    break;
                case "-":
                    setAnswerResult(
                        questions[i].getElementsByClassName("answer")[0],
                        (parseInt(questions[i].getElementsByClassName("value")[0].value) - parseInt(questions[i].getElementsByClassName("value")[1].value)) == parseInt(questions[i].getElementsByClassName("answer")[0].value)
                    );
                    break;
                case "*":
                    setAnswerResult(
                        questions[i].getElementsByClassName("answer")[0],
                        (parseInt(questions[i].getElementsByClassName("value")[0].value) * parseInt(questions[i].getElementsByClassName("value")[1].value)) == parseInt(questions[i].getElementsByClassName("answer")[0].value)
                    );
                    break;
                case ":":
                    setAnswerResult(
                        questions[i].getElementsByClassName("answer")[0],
                        parseInt(parseInt(questions[i].getElementsByClassName("value")[0].value) / parseInt(questions[i].getElementsByClassName("value")[1].value)) == parseInt(questions[i].getElementsByClassName("answer")[0].value)
                    );
                    break;
            }
        }

    }

}

function setAnswerResult(answerField, correct){
    if(correct){
        answerField.parentNode.className = "correct_answer";
    } else {
        answerField.parentNode.className = "wrong_answer";
    }
}