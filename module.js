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

if(getCookie("skinType")==="oily"){
    console.log("the cookie is oily");
    cleansing_dry.classList.add('hidden');
    cleansing_normal.classList.add('hidden');

}else if(getCookie("skinType")==="normal"){
    cleansing_dry.classList.add('hidden');
    cleansing_oily.classList.add('hidden');
    
}else if(getCookie("skinType")==="dry"){
    cleansing_oily.classList.add('hidden');
    cleansing_normal.classList.add('hidden');
    
};

