function cleanComments(){
    const comments = document.querySelector("#boxComments")
    let allComents = document.querySelectorAll(".media--comment")

    allComents.forEach(child => {
        comments.removeChild(child)
    })
}

function putCommentOnPage(data){
    cleanComments()
    data.forEach(item => {
        const comments = document.querySelector("#boxComments")


        let divMediaComment = document.createElement('div')
        let divMediaAuthor = document.createElement('div')
        let divMediaAuthorInfo = document.createElement('div')
        let pName = document.createElement('p')
        let aProfile = document.createElement('a')
        let divMediaCommentContent = document.createElement('div')
        let pContent = document.createElement('p')


        divMediaComment.className = 'media--comment'
        divMediaAuthor.className = 'media--author clearfix'
        divMediaAuthorInfo.className = 'media--author-info ov--h'
        pName.className = 'name'
        aProfile.className = 'btn-link'
        divMediaCommentContent.className = 'media--comment-content'

        pContent.innerText = item.comentario
        aProfile.innerText = item.nome_usuario
        aProfile.href = 'http://localhost:8080/profile/' + item.id_usuario


        divMediaCommentContent.appendChild(pContent)
        pName.appendChild(aProfile)
        divMediaAuthorInfo.appendChild(pName)
        divMediaAuthorInfo.appendChild(divMediaCommentContent)
        divMediaAuthor.appendChild(divMediaAuthorInfo)
        divMediaComment.appendChild(divMediaAuthor)
        comments.appendChild(divMediaComment)


    })
}

//TODO - Logout if user was not logged
async function getComment(idCurso, idAula){
    let data = JSON.stringify({
        id_curso: idCurso,
        id_aula: idAula,
    })

    // let url = 'https://'+location.hostname + '/get-comment'
    let url = 'http://localhost:8080/get-comment'

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
            const gambi = [{_id: '', comentario: '', nome_usuario: '', id_usuario: ''}]
            let newData = gambi.concat(data.data)
            putCommentOnPage(newData)
        })
        .catch(error => console.log(error))
}

function getVideo(link, id_aula, idCurso){
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

    getComment(idCurso, id_aula)
}

async function postComment(idCurso){
    let class_id = document.querySelector('#class_id').value
    let comment = document.querySelector('#comment_id')

    let data = JSON.stringify({
        id_curso: idCurso,
        id_aula: class_id,
        comentario: comment.value
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
    //TODO
        //do I do something?
        comment.value = ''
        getComment(idCurso, class_id)
    })
    .catch(error => console.log(error))

}