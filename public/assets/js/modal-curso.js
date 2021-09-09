function getVideo(link, id_aula){
    let id
    let modal = document.querySelector('#iframeVideo')
    let class_id = document.querySelector('#class_id')

    if (link.match(/(?<=watch)(.*?)(?=&list)/gm)){
        id = link.match(/(?<=watch)(.*?)(?=&list)/gm)
        id = id[0].replace('?v=', '')
    } else{
        id = link.replace('https://www.youtube.com/watch?v=', '')
    }

    modal.src = 'https://www.youtube.com/embed/' + id + '?showinfo=0&amp;controls=0&amp;rel=0&amp;wmode=transparent'
    class_id.value = id_aula
    console.log(modal.src)
}

async function postComment(idCurso){
    let class_id = document.querySelector('#class_id').value
    let comment = document.querySelector('#comment_id').value

    let data = JSON.stringify({
        id_curso: idCurso,
        id_aula: class_id,
        comentario: comment
    })

    // let url = 'https://'+location.hostname + '/comment/' + idCurso
    let url = 'http://localhost:8080//comment/' + idCurso

    let myHeaders = new Headers();
    let myInit = { method: 'POST',
             headers: myHeaders,
             mode: 'cors',
             cache: 'default',
             body: data };


    let myRequest = new Request(url, myInit)

    fetch(myRequest)
    .then(response => response.json())
    .then(data => {
        console.log(data)
    })
    .catch(error => console.log(error))

}