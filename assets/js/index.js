
window.addEventListener('DOMContentLoaded', ()=>{
    const form = document.getElementById('formOperaciones');
    const mostar = document.querySelector('.resultado');

    form.addEventListener('submit', (event)=>{
        event.preventDefault();

        let numeroUno = document.querySelector('.numeroUno').value;
        let numeroDos = document.querySelector('.numeroDos').value;

        const dataOperaciones = {
            numeroUno,
            numeroDos
        }

        fetch('php/register.php',{
            method: 'POST',
            headers:{
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(dataOperaciones)
        })
        .then(response => response.json())
        .then(data =>{
            let html = "";
            data.forEach(oper=>{
                html = `
                    <div class="col-12">suma: ${oper.suma}</div>
                    <div class="col-12">resta: ${oper.resta}</div>
                `;
            })

            mostar.innerHTML = html;
        })
        .catch(error =>{
            console.log(error)
        })


    })

    

})















// 'Content-Type': 'application/json'