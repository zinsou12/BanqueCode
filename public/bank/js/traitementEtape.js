let formprogress = document.getElementById('formprogress');
let baseurl = document.getElementById('baseurl');
let code = document.getElementById('code');
let resultat = document.getElementById('resultat');
formprogress.addEventListener('submit', (event)=>{

    event.preventDefault();
    submitFormProgress();
});

submitFormProgress = ()=>{


    let data =new FormData();
    data.append('code', code.value);
    url =baseurl.value+'/traitement/etape';
    let req = new Request(url,{

        method:'post',
        body:data
    });
    fetch(req).then((reponse)=>{
        reponse.text().then((reponsestext)=>{
            resultat.style.display='block';
            resultat.innerHTML=reponsestext;
            if(reponsestext=='success')
            {
                window.location.href=baseurl.value+'/bank/etape1';
            }
        });
    });
}