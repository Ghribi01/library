let menubtn = document.querySelector('.logo');
let menu = document.querySelector('.menu');
let titrespans = document.querySelectorAll('h1 span');
let text=document.querySelector('.textmo');

menubtn.addEventListener('click', function () {
    menu.classList.toggle('active');
});

window.addEventListener('load', () => {
    const TL = gsap.timeline({ paused: true });
    TL.staggerFrom(titrespans, 1, { top: -50, opacity: 0, ease: "power2.out" }, 0.3);
    TL.play();
});
// accordion
let accordion=document.getElementsByClassName('content-container');
for(i=0;i<accordion.length;i++){
    accordion[i].addEventListener('click',function(){
        this.classList.toggle('open');
    })
}
// animation
const textload =() =>{
    setTimeout(() =>{ text.textContent="Welcome";
    },0);
    setTimeout(() =>{ text.textContent="to";
    },400);
    setTimeout(() =>{ text.textContent="Ghribi's Library";
    },800);
}
textload();
setInterval(textload,5000)
