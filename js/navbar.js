const body = document.querySelector('body');
const toggle = document.querySelector('.toggle');

toggle.addEventListener('click',function(){
    body.classList.toggle('open');
})

