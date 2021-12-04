var btn_toogle = document.querySelector('.bar-sexe .point')
var sexe = document.querySelector('.bar-sexe')

sexe.addEventListener('click' , toogle);

btn_toogle.addEventListener('click' , toogle)

function toogle(){
    btn_toogle.classList.toggle('toogle')
}