
// skinType function :use like coffee count number if score is 1-5 dry 6-10 is normal; 11-15 is oil

var total=0;
skinType.addEventListener('change', function(){
    var q1Score = document.querySelector('input[name="q1"]:checked').value;
    var q2Score = document.querySelector('input[name="q2"]:checked').value;
    var q3Score = document.querySelector('input[name="q3"]:checked').value;
    var q4Score = document.querySelector('input[name="q4"]:checked').value;
    q1Score = parseInt(q1Score);
    q2Score = parseInt(q2Score);
    q3Score = parseInt(q3Score);
    q4Score = parseInt(q4Score);
    //use this way that allows total user 
    total=q1Score+q2Score+q3Score+q4Score;
   
    console.log(total);

})
//once got the number , show different messasge and set cookie




