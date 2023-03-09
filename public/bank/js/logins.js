let response = document.getElementById('response');

let loginform = document.getElementById('loginform');

let login = document.getElementById('login');

let loginerrors = document.getElementById('loginerrors');

let password = document.getElementById('password');

let passworderrors = document.getElementById('passworderrors');

let signin = document.getElementById('signin');

let url = document.getElementById('url').value;

console.log(url);

loginform.addEventListener('submit',(event)=>{

    event.preventDefault();

    formlogin();
});

const formlogin = ()=>{

    signin.innerHTML = 'please wait...';

    signin.style.backgroundColor ='red';

    signin.style.pointerEvents = 'none';

    let urluser = url+"login";

    let data = new FormData();
    data.append('login', login.value);
    data.append('password', password.value);

    let request = new Request(urluser, {

        method: 'POST',
        body: data,
        headers: {
                       
            "X-CSRF-Token": document.querySelector("input[name='_token']").value,
        },
    });

    fetch(request).then((reponse)=>{

        signin.innerHTML = 'SIGN IN';

    signin.style.backgroundColor ='GREEN';

    signin.style.pointerEvents = 'AUTO';
        reponse.json().then((resultat)=>{
            
            loginerrors.innerHTML=resultat.login;
            passworderrors.innerHTML=resultat.password;
            
            if(resultat.login ===null && resultat.password===null)
            {
                loginerrors.innerHTML='';
                passworderrors.innerHTML='';
                signin.style.pointerEvents = 'none';
                window.location.href=url+'bank';
                signin.innerHTML = 'Success: redirect to account';

            }            
        });
    });
}