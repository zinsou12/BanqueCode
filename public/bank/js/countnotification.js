let countnotification = document.getElementById('countnotification');

let liste_notification = document.getElementById('liste_notification');

let test = document.getElementById('test');

let base_url = document.getElementById('base_url').value;

let url = base_url+'compter';

function compter(){


	fetch(url, {

	method:'GET',

}).then((response)=>{

	
	if(response.status==200)
	{
		 response.json().then((reponse)=>{

		 	countnotification.innerHTML = reponse.compter.length;
		 	
		 	let listnotification = "";

		 	reponse.compter.forEach((item, index)=>{

		 		let lien = document.createElement("a");

		 		listnotification += "<li><a href='#'><div class='menu-info'><h4><b></b>"+item.data.message+"</h4></div></a></li>"

		 	});

		 	liste_notification.innerHTML = listnotification;
		 	
		 	
		 	
		});
	}
});

}

setInterval(compter, 4000);