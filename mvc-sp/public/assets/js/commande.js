
const card_client_element = document.getElementById("card-client");
const background_client_element = document.getElementById("client-background");

function displayClient(codec){
    background_client_element.classList.remove("hidden");
    background_client_element.classList.add("client-background-show");

    $.ajax({
        url:'mod_client/ajax/clientAjax.php',
        method:'POST',
        data:{codec:codec},
        success:function(data){
            console.log(data.json());
        }
    })
}

function removeCardClient(){
    background_client_element.classList.add("hidden");
    background_client_element.classList.remove("client-background-show");
}