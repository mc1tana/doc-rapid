const linksql = document.querySelectorAll('#vertical-menu a');
const page = document.querySelector('#changepage');
console.log(linksql);

        console.log(page);
for(let i = 0 ; 0<linksql.lenhgth-1;i++){
    linksql[i].addEventListener('click', (e)=>{
     e.preventDefault();

    })
}