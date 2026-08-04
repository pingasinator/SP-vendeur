<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Séraphin PARYS - {$titrePage}</title>
    <meta name="description" content="{$titrePage}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="public/favicon.ico">

    <link rel="stylesheet" href="public/assets/css/normalize.css">
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/assets/css/themify-icons.css">
    <link rel="stylesheet" href="public/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="public/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="public/assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/bootstrap-datepicker.css">
    <!-- <link rel="stylesheet" href="template/assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="public/assets/scss/style.css">
    <link href="public/assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


<!-- Left Panel -->


{include file='public/left.tpl'}

<!-- FIN : Left Panel -->


<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!--Header -->

    {include file='public/header.tpl'}

    <!-- FIN : header -->


    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>LE SLOGAN SPARYS !</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <!-- PLACER LE FIL D'ARIANE -->
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="index.php?gestion=commande">Commandes</a></li>
                        <li class="active">{$titrePage}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <form id="form-panier" class="d-flex flex-row justify-content-between" action="index.php" method="post">
                        <input type="hidden" name="gestion" value="commande">
                        <div class="card">
                            <div class="card-header "><strong>Fiche Commande : Enregistrement</strong></div>
                            <div class="card-body d-flex flex-column">
                                {if $Mode === "Consulter" || $Mode === "Modifier"}
                                    <label>Numéro : {$commande->getNumero()}</label>
                                    <label>Vendeur : {$commande->getCodev()} - {$commande->getVendeur()}</label>
                                    <label>Code Client : {$commande->getCodec()}</label>
                                    <label>Client : {$commande->getClient()}</label>
                                {else}
                                    <input type="hidden" name="action" value="form_valider_enregistrement_panier">
                                    <label>Date de la commande : <input name="date_Commande" type="text" value="{$date}" readonly></label>
                                    <label>Client :
                                        <select id="client" name="codec">
                                            {foreach from=$Clients item=client}
                                                <option value="{$client->getCodec()}">{$client->getNom()}</option>
                                            {/foreach}
                                        </select>
                                    </label>
                                    <label>Vendeur : {$vendeur->getCodev()} - {$vendeur->getPrenom()} {$vendeur->getNom()}<input type="hidden" name="codev" value="{$vendeur->getCodev()}"></label>
                                {/if}


                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header"><strong>Etat de la Commande</strong></div>
                            <div class="card-body d-flex flex-column">
                                {if $Mode === "Consulter" || $Mode === "Modifier"}
                                    <label>Date de commande : {$commande->getDate_commande()}</label>
                                    <label class="d-flex flex-row">Date de la livraison :
                                        {if $Mode === "Modifier"}
                                            <input type="hidden" name="action" value="form_valider_modifier_commande">
                                            <input type="hidden"  name="numero" value="{$commande->getNumero()}">
                                            <div class="input-group input-daterange">
                                                <input type="text" name="date_Livraison" class="form-control" value="">
                                            </div>
                                        {else}
                                            {$commande->getDate_Livraison()}
                                        {/if}
                                    </label>
                                    <label>Total HT (en €) : {$commande->getTotal_HT()} €</label>
                                    <label>Commande validée :  {if $commande->getValide()}OUI{else}NON{/if} </label>
                                {else}
                                    <label>Date de la livraison :
                                        <div class="input-group input-daterange">
                                            <input type="text" name="date_Livraison" class="form-control" value="">
                                        </div>
                                    </label>
                                    <label>Total HT (en €) : <input type="text" name="total_HT" value="{$totalCommande}" readonly></label>
                                    <label>TVA (en €) : <input type="text" name="total_TVA" value="{$totalTVA}" readonly></label>
                                {/if}
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <!-- PLACER LA LISTE DES PRODUITS -->
                                <thead>
                                <tr>
                                    <th>N° de ligne</th>
                                    <th>Référence</th>
                                    <th>Désignation</th>
                                    <th>Quantité</th>
                                    {if $Mode === "Consulter" || $Mode === "Modifier"}
                                        <th>Prix</th>
                                        {if $Mode === "Modifier"}
                                            <th class="pos-actions">Modifier</th>
                                        {/if}
                                    {else}
                                        <th>total</th>
                                    {/if}
                                </tr>
                                </thead>
                                <tbody>
                                {if $Mode === "Consulter" || $Mode === "Modifier"}
                                    {foreach from=$Panier item=ligne}
                                    <tr>
                                        <td>{$ligne->getNumeroLigne()}</td>
                                        <td>{$ligne->getReference()}</td>
                                        <td>{$ligne->getDesignation()}</td>
                                        <td>{if $Mode === "Modifier"}<input form="form_{$ligne->getNumeroLigne()}" type="text" name="quantite" value="{$ligne->getQuantite()}">{else}{$ligne->getQuantite()}{/if}</td>
                                        <td>{$ligne->getPrixVente()}</td>
                                        {if $Mode === "Modifier"}
                                            <td class="pos-actions">
                                                <form id="form_{$ligne->getNumeroLigne()}" action="index.php" method="post">
                                                    <input type="hidden" name="gestion" value="commande">
                                                    <input type="hidden" name="action" value="form_modifier_ligne_commande">
                                                    <input type="hidden" name="numero" value="{$commande->getNumero()}">
                                                    <input type="hidden" name="numeroLigne" value="{$ligne->getNumeroLigne()}">
                                                    <input type="image"  id="pImage"  name="btn_consulter" src="public/images/icones/m16.png">
                                                </form>
                                            </td>
                                        {/if}
                                    </tr>
                                    {/foreach}
                                {else}
                                    {foreach from=$Panier item=ligne}
                                        <tr>
                                            <td>{$ligne->getNumeroLigne()}</td>
                                            <td>{$ligne->getReference()}</td>
                                            <td>{$ligne->getDesignation()}</td>
                                            <td>{$ligne->getQuantite()}</td>
                                            <td>{$ligne->getPrixTotal()}</td>
                                        </tr>
                                        {foreachelse}
                                        <tr>
                                            <td colspan="6">
                                                Aucune produit trouvé
                                            </td>
                                        </tr>
                                    {/foreach}
                                {/if}

                                </tbody>
                            </table>
                            <div class="card-body">
                                <div class=" d-flex justify-content-between">
                                    {if $Mode === "Consulter" || $Mode === "Modifier"}
                                        <span>Montant de la commande : {$totalCommande} €</span>
                                        <span>Total TVA : {$commande->getTotal_TVA()} €</span>
                                    {/if}
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="">
                                    {if $Mode === "Consulter"}
                                        <input type="button" class="btn btn-submit" value="Retour" onclick="location.href='index.php?gestion=commande'">
                                        {if !$commande->getEtat() && !$commande->getValide()}
                                            <input type="button" class="btn btn-submit" value="Modifier" onclick="location.href='index.php?gestion=commande&action=form_modifier_commande&numero={$commande->getNumero()}'">
                                        {/if}
                                    {elseif $Mode === "Modifier"}
                                        <input type="button" class="btn btn-submit" value="Retour" onclick="location.href='index.php?gestion=commande&action=form_consulter_commande&numero={$commande->getNumero()}'">
                                        <input type="submit" form="form-panier"  class="btn btn-submit" value="Finaliser">
                                    {else}
                                        <input type="button" class="btn btn-submit" value="Retour à la commande" onclick="location.href='index.php?gestion=commande&action=form_ajouter'">
                                        <input type="submit" form="form-panier" class="btn btn-submit" value="Valider">
                                    {/if}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->
    <script src="public/assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="public/assets/js/plugins.js"></script>
    <script src="public/assets/js/main.js"></script>


    <script src="public/assets/js/lib/data-table/datatables.min.js"></script>
    <script src="public/assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="public/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="public/assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="public/assets/js/lib/data-table/jszip.min.js"></script>
    <script src="public/assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="public/assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="public/assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="public/assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="public/assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="public/assets/js/lib/data-table/datatables-init.js"></script>
    <script src="public/assets/js/bootstrap-datepicker.js"></script>
    <script src="public/assets/js/commande.js"></script>


    <script type="text/javascript">
        $(document).ready(function () {
            $('#bootstrap-data-table-export').DataTable();
        });

        $('.input-daterange input').each(function() {
            $(this).datepicker('clearDates');
        });
    </script>
</body>
</html>
