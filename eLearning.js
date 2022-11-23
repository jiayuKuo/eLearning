
// Module Accordion 
var module_click = document.querySelectorAll(".title-content");
var clicky = document.querySelectorAll(".click-target");
var module = document.querySelectorAll(".module_hidden");

clicky.forEach(element=>{
    element.addEventListener('click',function(){
        console.log(element);
    
        this.parentElement.nextElementSibling.classList.toggle('module_hidden');

    })

});

//skinQuiz
skinQuiz_btn.addEventListener('click',function(){
    console.log("meow");//work
    question.classList.remove('hidden');
    question_1.classList.remove('hidden');
})
close_Btn.addEventListener('click',function(){
    console.log("meow meow");//work
    question.classList.add('hidden');
})
// back and next btn
// SOS !! once click next everything is gone
let now="question_";
let count=1;
let btnId = now + count;
next_btn.addEventListener('click',function(){
    console.log(btnId);
    document.getElementById(btnId).classList.add('hidden');
    count++;
    btnId = now + count;
    document.getElementById(btnId).classList.remove('hidden');
    console.log(btnId);
})

back_btn.addEventListener('click',function(){
   
    console.log("close " + btnId);
    document.getElementById(btnId).classList.add('hidden');
    count--;
    btnId = now + count;
    console.log("open " + btnId);
    document.getElementById(btnId).classList.remove('hidden');
    // console.log(btnId);
})
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
    
    total+=q1Score;
    total+=q2Score;
    total+=q3Score;
    total+=q4Score;
    console.log(total);

    
   
    // total+=sum;
    // console.log(total);
})
//once got the number , show different messasge and set cookie




