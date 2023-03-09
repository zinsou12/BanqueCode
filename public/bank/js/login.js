let response = document.getElementById('response');

let loginform = document.getElementById('loginform');

let login = document.getElementById('login');

let loginerrors = document.getElementById('loginerrors');

let password = document.getElementById('password');

let passworderrors = document.getElementById('passworderrors');

let url = document.getElementById('url').value;

console.log(url);

loginform.addEventListener('submit',(event)=>{

    event.preventDefault();
    formlogin();
});

const formlogin = ()=>{

    loginform.classList.add('chargement');

    let urluser = url+"api/login";
    let data = new FormData();
    data.append('login', login.value);
    data.append('password', password.value);

    let request = new Request(urluser, {

        method: 'POST',
        body: data,
        headers: {
                       
            "X-CSRF-Token": document.querySelector("meta[name='csrf-token']").content
        },
    });

    fetch(request).then(
        (reponse)=>{
           
            loginform.classList.remove('chargement');
                reponse.json().then((resultat)=>
                {
                    console.log(resultat.success);
                    
                    if(resultat.success=='success')
                    {
                     loginerrors.innerHTML = '';
                     passworderrors.innerHTML = '';
                     response.innerHTML = resultat.success;
                     window.location.href = url+'account';
                        
                    }
                   if(resultat.success==false)
                   {
                    loginerrors.innerHTML = resultat.login;
                    passworderrors.innerHTML = resultat.password;
                    response.innerHTML = '';
                   
                   }

                   if(resultat.success=='admin')
                   {
                    loginerrors.innerHTML = '';
                    passworderrors.innerHTML = '';
                    response.innerHTML = resultat.success;
                    window.location.href = url+'liste';
                   }

                   else
                   {
                    loginerrors.innerHTML = '';
                    passworderrors.innerHTML = '';
                    response.innerHTML = resultat.success;
                    response.classList.add('btn');
                    response.classList.add('btn-primary');
                    response.classList.add('response');
                   }

                  
                });
           
           
            
        }
    );
}