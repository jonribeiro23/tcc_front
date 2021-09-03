function getVideo(link){
    let id
    let modal = document.querySelector('#iframeVideo')

    if (link.match(/(?<=watch)(.*?)(?=&list)/gm)){
        id = link.match(/(?<=watch)(.*?)(?=&list)/gm)
        id = id[0].replace('?v=', '')
    } else{
        id = link.replace('https://www.youtube.com/watch?v=', '')
    }

    modal.src = 'https://www.youtube.com/embed/' + id + '?showinfo=0&amp;controls=0&amp;rel=0&amp;wmode=transparent'
    console.log(modal.src)
}