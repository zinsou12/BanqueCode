function progresse_bar(width, max, time)

{


	let progress_bar = document.getElementById('progress_bar');

	let formulaire = document.getElementById('formulaire');

	formulaire.style.display="none";


	progress_bar.style.width = width+'%';

	progress_bar.innerHTML = width+'%';


				function progress(){

			   
				width++;

				progress_bar.style.width = width+'%'

				progress_bar.innerHTML = width+'%';			


				if(width>max)
			{
				clearInterval(interval);
				formulaire.style.display='block';
			}
				
			}


	let interval = setInterval(progress, time);

}