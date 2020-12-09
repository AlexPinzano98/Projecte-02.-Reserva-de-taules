const btn = document.getElementsByTagName('button');
window.addEventListener('load', ()=>{
    for (let i = 1; i < btn.length; i++) {
        let imgChange = btn[i].parentNode.parentNode.getElementsByTagName('img')[0];
        if(btn[i].innerText === 'ALIBERAR'){
            imgChange.src = '../img/mesa2.png';
        }else{
            imgChange.src = '../img/mesa1.png';
        }
    }
});  