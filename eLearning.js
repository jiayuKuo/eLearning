
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
next_btn.addEventListener('click',function(){
    console.log("meow meow meow");//work
    // should I use loop for next btn?? or if 
    question_1.classList.add('hidden');
    question_2.classList.remove('hidden');
})
// skinType function
// math 
