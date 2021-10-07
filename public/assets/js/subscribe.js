function subscribeOnCourse(id){
    let btn = document.querySelector('#subscribe-on-course')
    // let url = 'https://'+location.hostname + '/get-comment'
    let url = 'http://localhost:8080/inscrever/'+id

    let myHeaders = new Headers();
    let myInit = { method: 'GET',
        headers: myHeaders,
        mode: 'cors',
        cache: 'default'
    }


    let myRequest = new Request(url, myInit)

    fetch(myRequest)
        .then(response => console.log(response))
        .then(data => {
            btn.setAttribute('onclick', "unsubscribe('"+id+"')")
            btn.className = 'btn btn-danger'
            btn.innerText = 'Desinscrever-se'
        })
        .catch(error => console.log(error))
}

function unsubscribe(id){
    let btn = document.querySelector('#subscribe-on-course')
    // let url = 'https://'+location.hostname + '/get-comment'
    let url = 'http://localhost:8080/desinscrever/' + id

    let myHeaders = new Headers();
    let myInit = { method: 'GET',
        headers: myHeaders,
        mode: 'cors',
        cache: 'default'
    }


    let myRequest = new Request(url, myInit)

    fetch(myRequest)
        .then(response => console.log(response))
        .then(data => {
            btn.setAttribute('onclick', "subscribeOnCourse('"+id+"')")
            btn.className = 'btn btn-animate'
            btn.innerText = 'Inscrever-se'
        })
        .catch(error => console.log(error))
}
