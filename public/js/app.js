let pseudo = document.querySelector('.pseudo')
let infos = document.querySelector('.infos')

pseudo.addEventListener('click', () => {
    console.log(pseudo)
    infos.classList.toggle('deployed')
})

