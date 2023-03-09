let nom = document.getElementById('nom');

let url = document.getElementById('url').value;

let messageform = document.getElementById('messageform');

let messages = document.getElementById('message');

let token = document.querySelector("input[name='_token']").value;

let id = document.getElementById('id').value;

let success = document.getElementById('success');

messageform.addEventListener('submit', (event)=>{
    event.preventDefault();
    message();
})

const message = ()=>{
    let data = new FormData();
    data.append('message', messages.value);
       
    urlform = url+'Emessage/'+id;

    console.log(urlform);

    let request = new Request(urlform, {
        method:'post',
        body: data,
        headers:{
            'X-CSRF-TOKEN':token,
        },
    });

    fetch(request).then((response)=>{
        console.log(response);
        response.json().then((reponse)=>{
            console.log(reponse);
            if(reponse.success=='success')
            {
                console.log(reponse.success);
                success.classList.add('alert-success');
                success.innerHTML='MESSAGE ENVOYE AVEC SUCCES';

                const fin = ()=>{
                    success.innerHTML='Envoie de message'; 
                }

                setTimeout(fin, 3000);
            }
        });
    });
    
}