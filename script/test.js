window.addEventListener('scroll',function (){
    // let header = document.querySelector('header');
    let header = document.getElementById('navbar_main');
    header.classList.toggle('scroll_active',window.scrollY>0);
})