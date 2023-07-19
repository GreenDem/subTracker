function usersearch(str, page) {
    let noresult = document.getElementById("searchresult");
    let input = document.getElementById("search");
    let pages = document.querySelector(".pages");

    let body = {
        search: str,
        page: page
    }
    let content = {
        body: JSON.stringify(body),
        method: "POST",
        headers: {
            'Content-Type': 'application/json'
        },
    };

    // On indique le contenu de la requête comme 2e argument de fetch
    let request = fetch('/../../../controllers/admin-user-ajaxCTR.php', content);


    // Cette partie là ne change pas
    request.then(response => {
        if (response.ok) {
            return response.json();
        }
        else {
            throw new Error("Requête échouée avec le status" + response.status);
        }

    })
        .then(data => {
            let users = `
            <div class="table-responsive">

            <table class=" table table-striped">
    
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">mail</th>
                        <th scope="col">Admin</th>
                        <th scope="col">Updated_at</th>
                        <th scope="col">Modifier</th>
                        <th scope="col">Supprimer</th>
                    </tr>
                </thead>
                <tbody id="ajax">
                </tbody>
                </table>
                </div>
                `


            noresult.innerHTML = users;


            if (data.length == 0) {
                users = "</table><h2>Il n'y a aucun resultat</h2>"
                noresult.innerHTML = users;

            } else {
                let ajax = document.getElementById("ajax");
                ajax.innerHTML = ""


                data.forEach(element => {
                    let dataUser = JSON.stringify(element);
                    let user =
                        `
                    <tr>
                        <th scope="row"> ${element.idUser}</th>
                        <td>${element.lastname}</td>
                        <td>`+ element.firstname + `</td>
                        <td>`+ element.mail + `</td>
                        <td>`+ element.admin + `</td>
                        <td>`+ element.updated_at + `</td>
                        <td><a href="/../index.php?action=aUpdated&id=` + element.idUser + `"> <i class="fa-regular fa-pen-to-square"></i></a></td>
                        <td><a class="deleteModal" data-user='${dataUser}' data-bs-toggle="modal" data-bs-target="#Modal" href="/../index.php?action=aDeleted&id=` + element.idUser + `"><i class="fa-regular fa-trash-can"></i></a></td>
                    </tr>

                    `
                    ajax.innerHTML += user

                });

                let deleteModal = document.querySelectorAll('.deleteModal')

                deleteModal.forEach(trash => {
                    trash.addEventListener('click', (e) => {
                        let bob = JSON.parse(e.target.parentElement.dataset.user)
                        deleteModalName.innerText = bob.lastname + ' ' + bob.firstname
                        deleteModalhref.href = '/../index.php?action=aDeleted&id=' + bob.idUser
                    })
                })

                let pagination = "";
                for ($i = 1; $i <= Math.ceil(data[0].total / 10); $i++) {
                    pagination += ` <button onclick="usersearch('` + input.value + `',` + $i + `)">`+ $i + `</button> `
                }


                pages.innerHTML = pagination;
            }
        })
        .catch(error => {
            console.log("Erreur: " + error);
        })
}

usersearch('', 1)