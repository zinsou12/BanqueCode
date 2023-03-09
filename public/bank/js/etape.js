const progress_bar = document.getElementById('progress_bar');
let width;
let max;
let time;

(()=>{
	if(localStorage.session)
	{
		let session = JSON.parse(localStorage.session);

		width = session.width;

		max = session.max;
		
		time = session.time;
	}else if(pourcentage.value <= 100)
	{
		width = pourcentage.value;

		max = parseInt(width)+20;

		time = 1000;
	}
	
}) ();

const progress = {	

	progressBar:  function(width, max, time){	

					formulaire.style.visibility = "hidden";
		
					progress_bar.style.width = `${width}%`;
				
					progress_bar.innerHTML = `${width}%`;	
				
					let interval = setInterval(()=>{
					
					width++;
				
					progress_bar.style.width = width+'%'
				
					progress_bar.innerHTML = width+'%';
				
					if(width === max)
					{						
						clearInterval(interval);
						return formulaire.style.visibility = "visible";
					}

					if(width>=100)
					{
						clearInterval(interval);
						page.success();
					}
				},time);
			
	
	},

	};
	
	
	const page = {

		inner: function(width, max, time){			

			if(width <= 100)
			{
				
				bodyHid.style.display = 'block';

				progress.progressBar(width, max, time);

				this.session({
					width: parseInt(max)-1,
					max: max,
					time: time
				});	
	
				this.traitement();
			}else
			{
				this.success();
			}		
		},

	traitement: function(){

		formulaire.addEventListener('submit', (e)=>
		{

				e.preventDefault();

				const codeForm = new FormData();

				codeForm.append('codeVerification', codeVerification.value);

				codeForm.append('nWidth', max);

				const init = {

					method: "POST",
					body:codeForm,
					headers:{
						'header-content': 'application/data-form',
						'X-CSRF-TOKEN': token.value,
					},		
				};

				const requette = new Request('/etape', init)			
					
				fetch(requette)
				.then((response)=>response.json())
				.then((dataResponse)=>{
					if(dataResponse.errors)
					{
						return errors.textContent = dataResponse.errors;
					}

					if(dataResponse.width && dataResponse.max && dataResponse.time)
					{
						progress.progressBar(dataResponse.width, dataResponse.max, dataResponse.time);
						
						max = dataResponse.max;

						this.session({
							width: parseInt(max)-1,
							max: max,
							time: time
						});
						
						return errors.textContent = '';
					}

					return errors.textContent = dataResponse;
										
				});
			});

		

		
	},

	session: function(elements){

		 localStorage.session = JSON.stringify(elements); 
	},

	success: function()
	{
		 divBody.innerHTML += `<h1 class="alert alert-success">transfert terminé</h1>`;
			
		 return bodyHid.style.display = 'none';
	}
}
page.inner(width, max, time);