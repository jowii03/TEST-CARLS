/*function getQuestion(callback) {
    httpRequest = new XMLHttpRequest();
    httpRequest.onreadystatechange = function () {
        if (httpRequest.readyState === 4) { // request is done
            if (httpRequest.status === 200) { // successfully
                callback(httpRequest.responseText); // we're calling our method
            }
        }
    };
    httpRequest.open('GET', "backend.php");
    httpRequest.send();
}
  getQuestion(function (result) {
    questionaire = result;
    var myJSON = JSON.stringify(questionaire);
  //alert(question);
    console.log(myJSON);
});
  */


var question = [];
var answer = [];
var correct_answer = [];


$.ajax({

    type: "POST", //request type
    url: "../Randomquestions/backend.php", //the page containing php script

    data: {

    },
    // contentType: "application/json",
    dataType: 'json',
    success: function(result) {

        question = result[0].question;
        correct_ans = result[1].correct_ans;
        wrong_ans1 = result[2].wrong_ans1;
        wrong_ans2 = result[3].wrong_ans2;

        var index = 0;
        for (var i = 0; index <= 30;) {
            question[index] = [];
            correct_ans[index] = [];
            question[index][i] = result[i];
            correct_ans[index][i] = result[i + 1];
            answer[index] = [];

            for (var j = 1; j <= 3; j++) {
                answer[index][j - 1] = result[i + j];
            }

            i = i + 4;
            index++;
        }
        alert(answer[0][0]);
        console.log(answer[0][0]);
    }

});