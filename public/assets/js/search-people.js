// const URL = 'http://localhost:8080/'
const URL = 'https://'+ location.hostname

function cleanView(){
    let row = document.querySelector('#rowOfPeople')
    let cards = document.querySelectorAll('.cards-of-people')

    if (cards) {
        cards.forEach(item => row.removeChild(item))
    }
}

function appendPeople(data){

    cleanView()

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

        divCol.className = 'col-md-3 col-xs-6 col-xxs-12 cards-of-people'
        divMemberItem.className = 'member--item online'
        divImg.className = 'img img-circle'
        aImg.className = 'btn-link'
        aImg.href = URL+'perfil/'+ person.id
        img.src = "public/assets/img/members-img/member-02.jpg"
        divName.className = 'name'
        h3.className = 'h6 fs--12'
        aName.className = 'btn-link'
        aName.href = URL+'perfil/'+ person.id
        divActions.className = 'actions'
        ul.className = 'nav'
        aNewFriend.className = 'btn-link'
        aNewFriend.setAttribute("data-toggle", "tooltip")
        aNewFriend.setAttribute("data-placement", "bottom")
        aNewFriend.setAttribute("data-original-title", "Adicionar amigo")
        i.className = 'fa fa-user-plus'

        aName.innerText = person.nome + " " + person.sobrenome


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

function ajaxSearch(){
    let name = document.querySelector('#searchPeople')
    let xhr = new XMLHttpRequest()

    name.addEventListener('input', () => {
        let data = JSON.stringify({
            "nome": name.value
        })

        xhr.responseType = 'json'
        xhr.onreadystatechange = () => {
            if (xhr.readyState == 4) {
                if (xhr.response.users == null)
                    window.location.replace("http://www.w3schools.com")

                appendPeople(xhr.response.users)
            }
        }

        xhr.open('POST', URL+'buscar')
        if (name.value.length >2) {
            xhr.send(data)
        }
    })

}