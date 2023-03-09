let formprogress = document.getElementById('formprogress');
let url = document.getElementById('url').value;
let code = document.getElementById('code');
let errorscode = document.getElementById('errorscode');
let token = document.getElementById('token').value;
formprogress.addEventListener('submit', (event)=>{

    event.preventDefault();
    submitFormProgress();
});

submitFormProgress = ()=>{

    formprogress.style.pointerEvents='none';

    let data =new FormData();
    data.append('code', code.value);
    let req = new Request(url+'tetape3',{

        method:'post',
        body:data,
        headers:{
            'X-CSRF-TOKEN':token,
        },
    });
    fetch(req).then((reponse)=>{
        formprogress.style.pointerEvents='auto';
        reponse.json().then((resultat)=>{
            errorscode.innerHTML = resultat.code;
            if(resultat.success)
            {
                window.location.href=url+'etape4';
            }
            
        });
    });
}