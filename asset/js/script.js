

nav = document.querySelector('.navbar');
window.addEventListener('scroll', () =>{
    if(window.scrollY > 5){
        nav.classList.add("stiki")
    }
    else{
        nav.classList.remove("stiki")
    }
})
