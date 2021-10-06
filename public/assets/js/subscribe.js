function subscribeOnCourse(id){
    let btn = document.querySelector('#subscribe-on-course')
    // let url = 'https://'+location.hostname + '/get-comment'
    let url = 'http://localhost:8080/inscrever'

    let data = JSON.stringify({
        id_curso: id
    })

    console.log(data)

    let myHeaders = new Headers();
    let myInit = { method: 'POST',
        headers: myHeaders,
        mode: 'cors',
        cache: 'default',
        body: data
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