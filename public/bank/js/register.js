let url = document.getElementById('url').value;

let urlreq = url+'register';

let monthly_payment = document.getElementById('monthly_payment');

let token = document.getElementById('token').value;

let registerform = document.getElementById('registerform');

let last_name = document.getElementById('name');

let first_name = document.getElementById('first_name');

let email = document.getElementById('email');

let sex = document.getElementById('sex');

let date_birth = document.getElementById('date_birth');

let phone = document.getElementById('phone');

let country = document.getElementById('country');

let city = document.getElementById('city');

let job = document.getElementById('job');

let login = document.getElementById('login');

let currency =document.getElementById('currency');

let password = document.getElementById('password');

let repassword = document.getElementById('repassword');

let name_errors =document.getElementById('name-errors');

let first_name_errors = document.getElementById('first_name-errors');

let email_errors = document.getElementById('email-errors');

let sex_errors = document.getElementById('sex-errors');

let date_birth_errors = document.getElementById('date_birth-errors');

let phone_errors = document.getElementById('phone-errors');

let country_errors = document.getElementById('country-errors');

let city_errors = document.getElementById('city-errors');

let adresse_errors = document.getElementById('adresse-errors');

let job_errors = document.getElementById('job-errors');

let currency_errors =document.getElementById('currency-errors');

let login_errors = document.getElementById('login-errors');

let password_errors = document.getElementById('password-errors');

repassword_errors = document.getElementById('repassword-errors');

monthly_payment_errors = document.getElementById('monthly_payment_errors');

let button = document.getElementById('button');

registerform.addEventListener('submit',(event)=>{

    event.preventDefault();
    
    register();
});

const register =()=>{

   button.innerHTML='Please Wait...';

   button.style.pointerEvents = 'none';

    let data = new FormData();

    data.append('last_name', last_name.value);
    data.append('first_name', first_name.value);
    data.append('emails', email.value);
    data.append('sex', sex.value);
    data.append('date_birth', date_birth.value);
    data.append('phone', phone.value);
    data.append('country', country.value);
    data.append('city', city.value);
    data.append('adresse', adresse.value);
    data.append('job', job.value);
    data.append('logins', login.value);
    data.append('currency', currency.value);
    data.append('password', password.value);
    data.append('password_confirmation', repassword.value);
    data.append('monthly_payment', monthly_payment.value);

    let req = new Request(urlreq, {
        method:"POST",
        body:data,
        headers:{
           'X-CSRF-TOKEN':token,
        },
    });

    fetch(req).then((response)=>{
        response.text().then((reponse)=>{
            name_errors.innerHTML = '';
        })
    });

}