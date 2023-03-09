let img = document.getElementById('img');
let formtransfert = document.getElementById('transfert');
let url = document.getElementById('url').value;
let iban = document.getElementById('iban');
let fullname = document.getElementById('fullname');
let bic = document.getElementById('bic');
let adresse = document.getElementById('adresse');
let token = document.getElementById('token');
let resultat = document.getElementById('resultat');
let errorsiban = document.getElementById('iban-errors');
let errorsfullname = document.getElementById('fullname-errors');
let errorsbic = document.getElementById('bic-errors');
let errorsadresse = document.getElementById('adresse-errors');
let errorsamount = document.getElementById('amount-errors');
let button = document.getElementById('button');


let urlt = url+'ttransfert';

formtransfert.addEventListener('submit', (event)=>{
    
    event.preventDefault();
    formtransfer();
});

const formtransfer = ()=>{    

    button.innerHTML = 'Please wait...';

    button.style.pointerEvents='none';

    let  data = new FormData();

    data.append('iban', iban.value);
    data.append('fullname', fullname.value);
    data.append('bic', bic.value);
    data.append('adresse',adresse.value);
    data.append('amount', amount.value);
    let req = new Request(urlt,{
        method:'POST',
        body:data,
        headers:{

            'X-CSRF-TOKEN':token.value
        },
    });
    fetch(req)
    .then((response)=>{

        button.innerHTML = 'Submit';       

        button.style.pointerEvents='auto';

        response.json().then((reponse)=>{
            
            
            errorsiban.innerHTML = reponse.iban;

            errorsfullname.innerHTML = reponse.fullname;

            errorsbic.innerHTML = reponse.bic;

            errorsadresse.innerHTML = reponse.adresse;

            errorsamount.innerHTML = reponse.amount;

            if(reponse.success=="success")
            {
                button.innerHTML = 'success: Redirection in progress ';
                button.style.pointerEvents='none';
                window.location.href=url+'etape1';
            }
        });
       
    });
}