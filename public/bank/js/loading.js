let loading = ()=>{

    let dropdownNotification = document.getElementById('dropdownNotification');

    let id = document.getElementById('id').value;

    
    
    let url1 = url+"loading/"+id;    



let request = new Request(url1, {
    method: 'get',
    headers:{
        'X-CSRF-TOKEN':token,
    }
});

fetch(request).then((response)=>{
    
    response.json().then((reponse)=>{       
        
        if(reponse.notification != '')
        {
            dropdownNotification.innerHTML = reponse.notification;
            dropdownNotification.classList.add('alert');
            dropdownNotification.classList.add('alert-success');
            clearInterval(interval);
        }
        

            
    
    });
});
}

let interval = setInterval(loading, 30000);