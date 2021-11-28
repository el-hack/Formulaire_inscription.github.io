const container = document.querySelector('.inner')
const btn_previous = document.querySelector('.valide>p .retour')
const body = document.querySelector('.container .container__secondaire')
const btn_next = document.querySelector('.btn-suivant >button')

const page2 = document.querySelector('.page2')
const bar_progress = document.querySelector('.bar')

const envoyer = document.querySelector('.envoyer')

// au click sur le bouttom envoyer les autres partie de l'inscription disparaissent


// fin
btn_next.addEventListener('click' , (e)=>{
    e.preventDefault()
    container.classList.add('translate-next')
    body.classList.add('bg-change')
    bar_progress.style.width = '400px'
    page2.style.backgroundColor = 'rgb(8, 138, 99)'
})

btn_previous.addEventListener('click' , (e)=>{
    e.preventDefault()
    container.classList.remove('translate-next')
    bar_progress.style.width = ''
    page2.style.backgroundColor = ''
})
