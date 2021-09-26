const URL = 'http://localhost:8080/'

function changeButtomToUnfollow(id) {
    let btnFollow = document.querySelector('#to-follow')

    btnFollow.setAttribute('onclick', "unfollowUser('"+id+"')")
    btnFollow.className = 'btn btn-danger'
    btnFollow.innerText = 'Deixar de seguir'

}

function changeButtomToFollow(id) {
    let btnFollow = document.querySelector('#to-follow')

    btnFollow.setAttribute('onclick', "followUser('"+id+"')")
    btnFollow.className = 'btn btn-success'
    btnFollow.innerText = 'Seguir'

}

function followUser(id) {
    let xhr = new XMLHttpRequest()
    xhr.responseType = 'json'
    xhr.onreadystatechange = () => {
        if (xhr.readyState == 4) {
            changeButtomToUnfollow(id)
        }
    }

    xhr.open('GET', URL + 'seguir/' + id)
    xhr.send()
}

function unfollowUser(id) {
    let xhr = new XMLHttpRequest()
    xhr.responseType = 'json'
    xhr.onreadystatechange = () => {
        if (xhr.readyState == 4) {
            changeButtomToFollow(id)
        }
    }

    xhr.open('DELETE', URL + 'deixar-de-seguir/' + id)
    xhr.send()
}