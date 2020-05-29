var data = {
    "users": [{
            "id": 10,
            "name": "Ethyl Medhurst",
            "email": "noah.hand@example.org",
            "password": "$2y$10$GLfHbVK./jG2WD8QQ0.ZDOqqeJe7rz.hl827sKoHOhd9LLoXfyHHG",
            "created_at": "2019-03-26 04:55:04",
            "updated_at": "2019-03-26 04:55:04"
        },
        {
            "id": 9,
            "name": "Eula Lebsack PhD",
            "email": "schroeder.sylvan@example.org",
            "password": "$2y$10$.vzCIUVX34GibJ3.ObFqYu5Bd.Ig8PqF3adoLHza78eq510mfhy9G",
            "created_at": "2019-03-26 04:55:03",
            "updated_at": "2019-03-26 04:55:03"
        },
        {
            "id": 8,
            "name": "Mrs. Kathlyn Parisian DDS",
            "email": "ggrimes@example.net",
            "password": "$2y$10$N.DpYW9Sd0c8p3rSVjO0MeZ5e7idfPeKPZyOO77m8vNSEOnMws5O2",
            "created_at": "2019-03-26 04:55:03",
            "updated_at": "2019-03-26 04:55:03"
        }
    ]
};

function addElement() {
    var keys = Object.keys(data.users);
    console.log(keys);

    var tableBodyElement = document.getElementById('table-body');
    for (var i = 0; i < keys.length; i++) {
        var tableRow = document.createElement('tr');
        tableBodyElement.appendChild(tableRow);

        var tableData1 = document.createElement('td');
        // var tdNoiDung = document.createTextNode(data.users[i].id);
        // tableData1.appendChild(tdNoiDung);


        var tableData2 = document.createElement('td');
        tableData2.innerHTML = keys[1];

        var tableData3 = document.createElement('td');
        tableData3.innerHTML = keys[2];

        var tableData4 = document.createElement('td');
        tableData4.innerHTML = keys[3];

        var tableData5 = document.createElement('td');
        tableData5.innerHTML = keys[4];

        var tableData6 = document.createElement('td');
        tableData6.innerHTML = keys[5];

        tableRow.appendChild(tableData1);
        tableRow.appendChild(tableData2);
        tableRow.appendChild(tableData3);
        tableRow.appendChild(tableData4);
        tableRow.appendChild(tableData5);
        tableRow.appendChild(tableData6);
    }
}