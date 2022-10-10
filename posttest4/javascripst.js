function myfunction (){
    var element = document.body;
    element.classList.toggle("dark-mode");
}

const judul = document.getElementById('judul');
judul.style.color = 'purple';

const ubahwarna = document.getElementById("ubahwarna");
ubahwarna.onclick = function(){
    // document.body.style.backgroundColor = 'lightblue';
    document.body.classList.toggle('biru-muda')


} 

const acakwarna = document.createElement('button');
const tekstombol = document.createTextNode('acak warna');
acakwarna.appendChild(tekstombol);
acakwarna.setAttribute('type','button');
ubahwarna.after(acakwarna);

acakwarna.addEventListener('click', function (){
    const r = Math.round(Math.random() * 255 + 1);
    const g = Math.round(Math.random() * 255 + 1);
    const b = Math.round(Math.random() * 255 + 1);
   

    document.body.style.backgroundColor = 'rgb('+ r +','+ g +','+ b +')';
    
});

