let read = document.getElementById('read');

let idnotification = document.getElementById('idnotification');

let token = document.querySelector("input[name='_token']");

let read_url = base_url+'read';

read.addEventListener('submit', (event)=>{
	event.preventDefault();
	readnotification();
});

const readnotification = ()=>{


	let read_data = new FormData();

read_data.append('id', idnotification.value);

fetch(read_url, {
	method:'post',
	body: read_data,
	headers:{
		"X-CSRF-TOKEN":token.value,
	},
}).then((response)=>{
	console.log(response);
	if(response.status==200)
	{
		response.json().then((reponse)=>{
			console.log(reponse.read);
		});
	}
});

}
