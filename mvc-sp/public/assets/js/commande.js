
const card_client_element = document.getElementById("card-client");
const background_client_element = document.getElementById("client-background");

function displayClient(codec){
    background_client_element.classList.remove("hidden");
    background_client_element.classList.add("client-background-show");

    $.ajax({
        url:'api/getClient.php',
        method:'POST',
        data:{codec:codec},
        success:function(data){
            let client = JSON.parse(data);
            const form_codec_element = document.getElementById('codec');
            const form_nom_element = document.getElementById('nomPrenom');
            const form_adresse_element = document.getElementById('adresse');
            const form_cp_element = document.getElementById("cp");
            const form_ville_element = document.getElementById("ville");
            const form_telephone_element = document.getElementById("telephone");

            form_codec_element.innerText = "Client : " + client.codec;
            form_nom_element.value =  client.nom;
            form_adresse_element.value = client.adresse;
            form_cp_element.value = client.cp;
            form_ville_element.value = client.ville
            form_telephone_element.value = client.telephone;
        }
    })
}

function removeCardClient(){
    background_client_element.classList.add("hidden");
    background_client_element.classList.remove("client-background-show");
}