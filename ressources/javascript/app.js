const btns = document.querySelectorAll('.btn-modale');
const modaleEquipement = document.querySelector('.bloc-modale');
const imgIndex = document.querySelector('.bloc-modale img');


// fenetre model qui permet d'arrandir une image et le reduire 
btns.forEach(btn => {
    btn.addEventListener('click', (e) => {

        imgIndex.src = `ressources/images/img${e.target.getAttribute('data-index')}-equip.jpg`;
        modaleEquipement.classList.add('active-modale');

    })
})

modaleEquipement.addEventListener('click', () => {
    modaleEquipement.classList.remove('active-modale');
})
