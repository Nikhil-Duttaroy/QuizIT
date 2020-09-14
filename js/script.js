const contact=document.querySelector(".contactUs");
const close=document.querySelector(".close");
const modal = document.querySelector(".modal");
const contain = document.querySelectorAll(".mainContainer");

contact.addEventListener('click',() =>
    blurStyle()
)




close.addEventListener("click",()=>{
    modal.style.display = "none";
    
    contain.forEach((contain)=>{
      contain.classList.remove("isBlur"); 
    })
    
  })

function blurStyle() {
    modal.style.display = "block";
    contain.forEach((contain) => {
      console.log(contain);
      contain.classList.add("isBlur");
    });
    gsap.from(".modal", {
      opacity: 0,
      yPercent: -100,
      // xPercent: 100,
      // rotate: 256,
      duration: 2,
      ease: "back(3)",
    });
  }




const N=document.querySelector('.N');
const S=document.querySelector('.S');
const Rk=document.querySelector('.Rk');
const R=document.querySelector('.R');
const Nikhil=document.querySelector('#card1');
const Sahil=document.querySelector('#card2');
const Rohitkumar=document.querySelector('#card3');
const Rutuja=document.querySelector('#card4');
const animate=gsap.from(".cards",{
  opacity:0,
  height:0,
  width:0,
  duration:1
})

N.addEventListener('mouseover',() => { 
  if (Nikhil.style.display="none") {    
  Nikhil.style.display="block"
  Sahil.style.display="none";
  Rohitkumar.style.display="none"
  Rutuja.style.display="none"
  animate.restart();
  animate.play();
  }
})

S.addEventListener('mouseover',() => { 
  if (Sahil.style.display="none") {   
  Sahil.style.display="block"
  Nikhil.style.display="none";
  Rohitkumar.style.display="none"
  Rutuja.style.display="none"
  animate.restart();
  animate.play();
  }
})

Rk.addEventListener('mouseover',() => { 
  if (Rohitkumar.style.display="none") {   
  Rohitkumar.style.display="block"
  Nikhil.style.display="none";
  Sahil.style.display="none"
  Rutuja.style.display="none"
  animate.restart();
  animate.play();
  }
})

R.addEventListener('mouseover',() => { 
  if (Rutuja.style.display="none") {   
  Rutuja.style.display="block"
  Nikhil.style.display="none";
  Sahil.style.display="none"
  Rohitkumar.style.display="none"
  animate.restart();
  animate.play();
  }
})


//login and signup
const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});
































