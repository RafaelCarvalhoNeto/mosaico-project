let div = document.querySelectorAll('.imagem');
let imagens = document.querySelectorAll('.small_img');
let modal = document.querySelector('.modal');
let modalImg = document.querySelector('#modal_img');
let btClose = document.querySelector('#bt_close');

for (let i = 0; i < div.length; i++){
    div[i].addEventListener('click', ()=>{
        
        srcVal = imagens[i].getAttribute('src');
        modalImg.setAttribute('src',srcVal);
        modal.classList.toggle('modal_active');
    });

}

modal.addEventListener('click',()=>{
    modal.classList.toggle('modal_active');
})