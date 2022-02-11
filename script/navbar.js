//anchor nav change
window.addEventListener('scroll',function (){
    let navbar = document.getElementById('navbar_main');
    navbar.classList.toggle('scroll_active',window.scrollY>0);
})

//anchor switch
let body = document.querySelector('body');
var switchBtn = document.getElementById('switch');

switchBtn.classList.add('night');

function viewSwitch(){
    if(switchBtn.classList.contains('night')){
        switchBtn.classList.remove('night');
        switchBtn.classList.add('day');
        body.classList.add('day');
    }
}

switchBtn.addEventListener('click',viewSwitch);