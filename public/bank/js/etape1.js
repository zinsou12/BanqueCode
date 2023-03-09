const progressbar = (width, time)=>{

    let progress = document.getElementById('progress');
    let formcode = document.getElementById('formcode');

    
    formcode.style.display = 'none';
    progress.style.width = width+'%';
    progress.innerHTML = width+'%';
    let interval = setInterval(() => {
        width++;
        progress.style.width = width+'%';
        progress.innerHTML = width+'%';
        if(width>14)
    {
            clearInterval(interval);
            formcode.style.display = 'block';
    }

    }, time);

    
}