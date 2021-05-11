function getQuestion(callback) {
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
  
