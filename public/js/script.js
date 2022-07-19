const one = document.querySelector(".one");
const two = document.querySelector(".two");
const three = document.querySelector(".three");
const four = document.querySelector(".four");
const five = document.querySelector(".five");
const six = document.querySelector(".six");
const seven = document.querySelector(".seven");

//form progress deklaration
const pertama = document.querySelector(".pertama")
const kedua = document.querySelector(".kedua");
const ketiga = document.querySelector(".ketiga");
const keempat = document.querySelector(".keempat");
const kelima = document.querySelector(".kelima");
const keenam = document.querySelector(".keenam");
const ketujuh = document.querySelector(".ketujuh");

const nextbtn = document.querySelectorAll(".next-1");
const prevbtn = document.querySelectorAll(".prev-1");
const Stage = document.querySelectorAll(".stage");
const progresStep = document.querySelectorAll(".progres-step");

let formStepsNum = 0;

nextbtn.forEach((btn) => {
  btn.addEventListener("click", () =>{
    formStepsNum++;
    updateFormSteps();
    updateProgresbar();
  });
});

prevbtn.forEach((btn) =>{
  btn.addEventListener("click", () =>{
    formStepsNum--;
    updateFormSteps();
    updateProgresbar();
  });
});

function updateFormSteps(){
  Stage.forEach((formStep) => {
    formStep.classList.contains("stage-active") &&
    formStep.classList.remove("stage-active");
  });
  Stage[formStepsNum].classList.add("stage-active");
}

function updateProgresbar(){
  progresStep.forEach((progresSteps, idx) => {
    if(idx < formStepsNum + 1){
      progresSteps.classList.add("active");
    }else{
      progresSteps.classList.remove("active");
    }
  });
}


one.onclick = function(){
  one.classList.add("active");
  two.classList.remove("active");
  three.classList.remove("active");
  four.classList.remove("active");
  five.classList.remove("active");
  six.classList.remove("active");
  seven.classList.remove("active");
  pertama.classList.add("stage-active");
  kedua.classList.remove("stage-active");
  ketiga.classList.remove("stage-active");
  keempat.classList.remove("stage-active");
  kelima.classList.remove("stage-active");
  keenam.classList.remove("stage-active");
  ketujuh.classList.remove("stage-active");
}

two.onclick = function(){
  one.classList.add("active");
  two.classList.add("active");
  three.classList.remove("active");
  four.classList.remove("active");
  five.classList.remove("active");
  six.classList.remove("active");
  seven.classList.remove("active");
  pertama.classList.remove("stage-active");
  kedua.classList.add("stage-active");
  ketiga.classList.remove("stage-active");
  keempat.classList.remove("stage-active");
  kelima.classList.remove("stage-active");
  keenam.classList.remove("stage-active");
  ketujuh.classList.remove("stage-active");
  
}

three.onclick = function(){
  one.classList.add("active");
  two.classList.add("active");
  three.classList.add("active");
  four.classList.remove("active");
  five.classList.remove("active");
  six.classList.remove("active");
  seven.classList.remove("active");
  pertama.classList.remove("stage-active");
  kedua.classList.remove("stage-active");
  ketiga.classList.add("stage-active");
  keempat.classList.remove("stage-active");
  kelima.classList.remove("stage-active");
  keenam.classList.remove("stage-active");
  ketujuh.classList.remove("stage-active");
}

four.onclick = function(){
  one.classList.add("active");
  two.classList.add("active");
  three.classList.add("active");
  four.classList.add("active");
  five.classList.remove("active");
  six.classList.remove("active");
  seven.classList.remove("active");
  pertama.classList.remove("stage-active");
  kedua.classList.remove("stage-active");
  ketiga.classList.remove("stage-active");
  keempat.classList.add("stage-active");
  kelima.classList.remove("stage-active");
  keenam.classList.remove("stage-active");
  ketujuh.classList.remove("stage-active");
}

five.onclick = function(){
  one.classList.add("active");
  two.classList.add("active");
  three.classList.add("active");
  four.classList.add("active");
  five.classList.add("active");
  six.classList.remove("active");
  seven.classList.remove("active");
  pertama.classList.remove("stage-active");
  kedua.classList.remove("stage-active");
  ketiga.classList.remove("stage-active");
  keempat.classList.remove("stage-active");
  kelima.classList.add("stage-active");
  keenam.classList.remove("stage-active");
  ketujuh.classList.remove("stage-active");
}

six.onclick = function(){
  one.classList.add("active");
  two.classList.add("active");
  three.classList.add("active");
  four.classList.add("active");
  five.classList.add("active");
  six.classList.add("active");
  seven.classList.remove("active");
  pertama.classList.remove("stage-active");
  kedua.classList.remove("stage-active");
  ketiga.classList.remove("stage-active");
  keempat.classList.remove("stage-active");
  kelima.classList.remove("stage-active");
  keenam.classList.add("stage-active");
  ketujuh.classList.remove("stage-active");
}

seven.onclick = function(){
  one.classList.add("active");
  two.classList.add("active");
  three.classList.add("active");
  four.classList.add("active");
  five.classList.add("active");
  six.classList.add("active");
  seven.classList.add("active");
  pertama.classList.remove("stage-active");
  kedua.classList.remove("stage-active");
  ketiga.classList.remove("stage-active");
  keempat.classList.remove("stage-active");
  kelima.classList.remove("stage-active");
  keenam.classList.remove("stage-active");
  ketujuh.classList.add("stage-active");
}
