let updateform = document.getElementById('updateform');

let nom = document.getElementById('nom');

let url = updateform.getAttribute('action');

let montant = document.getElementById('montant');

let token = document.querySelector("input[name='_token']").value;

let id = document.getElementById('id').value;

let success = document.getElementById('success');

console.log(id); 

updateform.addEventListener('submit', (event)=>{
    event.preventDefault();
    
    update();
})

const update = ()=>{

    let data = new FormData();

    data.append('montant', montant.value);   

    let request = new Request(url, {
        method:'post',
        body: data,
        headers:{
            'X-CSRF-TOKEN':token,
        },
    });

    fetch(request).then((response)=>{
        response.json().then((reponse)=>{
            if(reponse.success=='success')
            {
                console.log(reponse.success);
                success.classList.add('alert-success');
                success.innerHTML='COMPTE CREDITE AVEC SUCCES';

                const fin = ()=>{
                    success.innerHTML='CREDITER LE COMPTE'; 
                }

                setTimeout(fin, 3000);
            }
        });
    });
    
}