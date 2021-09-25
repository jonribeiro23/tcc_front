function getAmount(){
    return document.querySelectorAll('.member--item').length
}

function appendPeople(data){

    data.forEach(person => {
        let row = document.querySelector('#rowOfPeople')
        let divCol = document.createElement('div')
        let divMemberItem = document.createElement('div')
        let divImg = document.createElement('div')
        let aImg = document.createElement('a')
        let img = document.createElement('img')
        let divName = document.createElement('div')
        let h3 = document.createElement('h3')
        let aName = document.createElement('a')
        let divActions = document.createElement('div')
        let ul = document.createElement('ul')
        let li = document.createElement('li')
        let aNewFriend = document.createElement('a')
        let i = document.createElement('i')

        divCol.className = 'col-md-3 col-xs-6 col-xxs-12'
        divMemberItem.className = 'member--item online'
        divImg.className = 'img img-circle'
        aImg.className = 'btn-link'
        aImg.href = "<?php echo base_url('perfil/');" + person.id +  "?>"
        img.src = "public/assets/img/members-img/member-02.jpg"
        divName.className = 'name'
        h3.className = 'h6 fs--12'
        aName.className = 'btn-link'
        aName.href = "<?php echo base_url('perfil/');" + person.id +  "?>"
        divActions.className = 'actions'
        ul.className = 'nav'
        aNewFriend.className = 'btn-link'
        aNewFriend.setAttribute("data-toggle", "tooltip")
        aNewFriend.setAttribute("data-placement", "bottom")
        i.className = 'fa fa-user-plus'

        aName.innerText = person.nome + " " + person.sobrenome

        console.log(person.nome)

        aNewFriend.appendChild(i)
        li.appendChild(aNewFriend)
        ul.appendChild(li)
        divActions.appendChild(ul)

        h3.appendChild(aName)
        divName.appendChild(h3)

        aImg.appendChild(img)
        divImg.appendChild(aImg)

        divMemberItem.appendChild(divImg)
        divMemberItem.appendChild(divName)
        divMemberItem.appendChild(divActions)

        divCol.appendChild(divMemberItem)


        row.appendChild(divCol)
    })
}

function seeMore(){
    // let url = 'https://'+location.hostname + '/get-comment'
    let url = 'http://localhost:8080/see-more/' + getAmount()

    let myHeaders = new Headers();
    let myInit = { method: 'GET',
        headers: myHeaders,
        mode: 'cors',
        cache: 'default'
    };


    let myRequest = new Request(url, myInit)

    fetch(myRequest)
        .then(response => response.json())
        .then(data => {
            console.log(data)
            appendPeople(data.users)
        })
        .catch(error => console.log(error))
}