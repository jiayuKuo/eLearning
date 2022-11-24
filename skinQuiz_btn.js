//skinQuiz
skinQuiz_btn.addEventListener('click',function(){
   
    question.classList.remove('hidden');
    question_1.classList.remove('hidden');
})
close_Btn.addEventListener('click',function(){
  
    question.classList.add('hidden');
})
// back and next btn

let now="question_";
let count=1;
let btnId = now + count;
next_btn.addEventListener('click',function(){
    if(count==4){
        console.log("meow!!!");
        // hide everything
        next_btn.classList.add('hidden');
        back_btn.classList.add('hidden');
        //create new contant
        document.querySelector('#question>h2').innerHTML="Result";
        var resultText = document.querySelector('#question>p').innerHTML="Your skin type is "+ skinType;
        // show module button
        let moduleBtn = document.createElement('button');
        moduleBtn.innerText="Module";
        moduleBtn.classList.add('big_btn');
        moduleBtn.onclick = function(){
            window.open('module.php','_self');
        };
        document.querySelector('.btn_container').appendChild(moduleBtn);

        
        
        var q1Score = document.querySelector('input[name="q1"]:checked').value;
        var q2Score = document.querySelector('input[name="q2"]:checked').value;
        var q3Score = document.querySelector('input[name="q3"]:checked').value;
        var q4Score = document.querySelector('input[name="q4"]:checked').value;
        q1Score = parseInt(q1Score);
        q2Score = parseInt(q2Score);
        q3Score = parseInt(q3Score);
        q4Score = parseInt(q4Score);
        //use this way that allows total user 
        var total=q1Score+q2Score+q3Score+q4Score; 
       
        console.log("This is the reult "+ total);
        // show oily total
        var skinType ;

            if(total<=5){
                skinType="dry";
            }else if(total<=10){
                skinType="normal";
            }else{
                skinType='oily';
            };
        //  if(total<=5){
        //     setCookie(skinType,'dry',30);
        //  }else if(total<=10){
        //     setCookie(skinType,'normal',30);
        //  }else{
        //     setCookie(skinType,'oily',30);
        //  };
         setCookie("skinType",skinType,30);
         //create new contant
         document.querySelector('#question>h2').innerHTML="Result";
         var resultText = document.querySelector('#question>p').innerHTML="Your skin type is "+ skinType + ". Click the module button. let's learn how to take care of your skin.";
        

    }else if(count==3){
        //document.getElementById('next_btn').disabled = true;  
        document.getElementById('next_btn').innerText="Submit";
    }else{
        document.getElementById('next_btn').disabled = false;
    }
    document.getElementById('back_btn').disabled = false;

    
    // console.log(btnId);
    document.getElementById(btnId).classList.add('hidden');
    count++;
    btnId = now + count;
    document.getElementById(btnId).classList.remove('hidden');
    // console.log(btnId);
    
   
})

back_btn.addEventListener('click',function(){
   
    console.log("close " + btnId);
    document.getElementById(btnId).classList.add('hidden');
    count--;
    btnId = now + count;
    console.log("open " + btnId);
    document.getElementById(btnId).classList.remove('hidden');
    // console.log(btnId);
    if(count<=1){
        document.getElementById('back_btn').disabled = true;  
    }else{
        document.getElementById('back_btn').disabled = false;      
    }
    document.getElementById('next_btn').disabled = false;
    document.getElementById('next_btn').innerText="Next";
})