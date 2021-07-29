AOS.init({ 
    duration: 2000, 
});

window.onscroll = function(){
    const button = document.querySelector('.up')
    const hidden = window.pageYOffset
    if(hidden > 720){
        button.style.display = 'block'
}
    else
        button.style.display ='none'
    }



