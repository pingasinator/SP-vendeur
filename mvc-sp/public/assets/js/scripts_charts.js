$(document).ready(function () {
    genererChiffreAffaire();
    genererMeilleurxVentes();
    genererChiffreTotal();
})

function genererChiffreAffaire(){
    $.ajax({
        url:"index.php?gestion=accueil&action=generer_stats",
        type:"GET",
        dataType:"text",
        success:function(data){
            data = JSON.parse(data);
            let montant_total = 0;
            const camois_total_element = document.getElementById("camois_total");

            let mois = data.map(function(e){
                return e['mois'];
            })
            let total_ht = data.map(function(e){
                montant_total += e['total'];
                return e['total'];
            })

            new Chart(
                document.getElementById('camois'),
                {
                    type: 'bar',
                    data: {
                        labels: mois,
                        datasets: [{
                            label: 'Mon chiffre d\'affaire par mois',
                            data: total_ht,
                            backgroundColor: [
                                '#FFFFFF',
                                '#FF9EE9',
                                '#C9F9FF',
                                '#402100',
                                '#000000',
                                '#FF0000',
                                '#FF7300',
                                '#FFFF00',
                                '#0DFF00',
                                '#00BBFF',
                                '#C300FF',
                                '#7A7A7A',
                            ],
                            borderColor: [
                                '#FFFFFF',
                                '#FF9EE9',
                                '#C9F9FF',
                                '#402100',
                                '#000000',
                                '#FF0000',
                                '#FF7300',
                                '#FFFF00',
                                '#0DFF00',
                                '#00BBFF',
                                '#C300FF',
                                '#7A7A7A',
                            ],
                            borderWidth: 1
                        }]
                    },
                }
            )

            camois_total_element.innerText = "Montant total : " + montant_total;
        },
        error:function(request,error){
            console.log("Erreur :" + error);
        }

    })
}

function genererMeilleurxVentes(){
    $.ajax({
        url:"index.php?gestion=accueil&action=generer_meilleursVentes",
        type:"GET",
        dataType:"text",
        success:function(data) {
            data = JSON.parse(data);
            let designation = data.map(function (e) {
                return e['designation'];
            })

            let count = data.map(function (e) {
                return e['count'];
            })

            new Chart(
                document.getElementById('mventes'),
                {
                    type: 'doughnut' ,
                    data: {
                        labels: designation,
                        datasets: [{
                            label: 'My First Dataset',
                            data: count,
                            backgroundColor: [
                                '#FF6EA8',
                                '#FFFFFF',
                                '#F757FF',
                                '#000000',
                                '#07008F'
                            ],
                            hoverOffset: 4
                        }]
                    },
                }
            )
        },
        error:function(request,error){
            console.log("Erreur :" + error);
        }
    })
}

function genererChiffreTotal(){
    $.ajax({
        url:"index.php?gestion=accueil&action=generer_chiffreAffaireTotal",
        type:"GET",
        dataType:"text",
        success:function(data) {
            data = JSON.parse(data);
            let montant_total = 0;

            let mois = data.map(function(e){
                return e['mois'];
            })

            let total_ht = data.map(function(e){
                montant_total += e['total'];
                return e['total'];
            })




            new Chart(
                document.getElementById('ctotal'),
                {
                    type: 'line',
                    data: {
                        labels: mois,
                        datasets: [{
                            label: 'My First Dataset',
                            data: total_ht,
                            fill: false,
                            borderColor: '#8300A3',
                            backgroundColor: '#FFD000',
                            tension: 0.1
                        }]
                    },
                }
            )


            const ctotal_element = document.getElementById("ctotal_t");

            ctotal_element.innerText = "Montant total : " + montant_total;
        },
        error:function(request,error){
            console.log("Erreur :" + error);
        }
    })
}