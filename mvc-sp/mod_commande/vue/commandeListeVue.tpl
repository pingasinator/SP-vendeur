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
    <meta name="description" content="<!-- PLACER LE TITRE-->">
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
    <link rel="stylesheet" href="public/assets/css/commande.css">
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

    <div class="hidden" id="client-background">
        <div class="card" id="card-client">
            <div class="card-header" id="codec"><strong>Client : E</strong></div>
            <div class="card-body">
                <div class="form-group">
                    <label for="nomPrenom">Nom et Prénom :</label>
                    <input id="nomPrenom" class="form-control" name="nomPrenom" readonly value="">
                </div>
                <div class="form-group">
                    <label for="adresse">Adresse :</label>
                    <input id="adresse" class="form-control" name="adresse" readonly value="">
                </div>
                <div class="form-group">
                    <label for="cp">Code Postal :</label>
                    <input id="cp" class="form-control" name="cp" readonly value="">
                </div>
                <div class="form-group">
                    <label for="ville">Ville :</label>
                    <input id="ville" class="form-control" name="ville" readonly value="">
                </div>
                <div class="form-group">
                    <label for="telephone">Téléphone :</label>
                    <input id="telephone" class="form-control" name="telephone" readonly value="">
                </div>

                <label></label>
                <button onclick="removeCardClient()">Retour</button>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        {if $errorMessage neq ''}
            <div class="alert alert-danger">{$errorMessage}</div>
        {/if}
        {if $messageSuccess neq ''}
            <div class="alert alert-success">{$messageSuccess}</div>
        {/if}

        <div class="animated fadeIn">

            <div class="row">

                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">{$titrePage}

                                <!-- PLACER LE FORMULAIRE D'AJOUT-->
                                <form action="index.php" method="post" class="pos-ajout">
                                    <input type="hidden" name="gestion" value="commande">
                                    <input type="hidden" name="action" value="form_ajouter">
                                    <label>Poser une commande
                                        <input
                                                type="image"
                                                id="aImage"
                                                name="btn_ajouter"
                                                src="public/images/icones/a16.png">
                                    </label>
                                </form>

                            </strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <!-- PLACER LA LISTE DES COMMANDES -->
                                <thead>
                                <tr>
                                    <th>Numéro</th>
                                    <th>Vendeur</th>
                                    <th>Client</th>
                                    <th>Montant HT</th>
                                    <th class="pos-actions">Consulter</th>
                                    <th class="pos-actions">Modifier</th>
                                </tr>
                                </thead>
                                <tbody>
                                {foreach from=$listeCommmandes item=commande}
                                    <tr>
                                        <td>{$commande->getNumero()}</td>
                                        <td>{$commande->getVendeur()}</td>
                                        <td>
                                            <button onclick="displayClient({$commande->getCodec()})" class="button-client">{$commande->getCodec()} - {$commande->getClient()}</button>
                                        </td>
                                        <td>{$commande->getTotal_HT()}</td>
                                        <td class="pos-actions">
                                            <form action="index.php" method="post">
                                                <input type="hidden" name="gestion" value="commande">
                                                <input type="hidden" name="action" value="form_consulter">
                                                <input type="hidden" name="codec" value="{$commande->getCodec()}">
                                                <input type="image"  id="pImage"  name="btn_consulter" src="public/images/icones/p16.png">

                                            </form>
                                        </td>
                                        <td class="pos-actions">
                                            <form action="index.php" method="post">
                                                <input type="hidden" name="gestion" value="commande">
                                                <input type="hidden" name="action" value="form_modifier">
                                                <input type="hidden" name="codec" value="{$commande->getCodec()}">
                                                <input type="image" id="mImage" name="btn_modifier" src="public/images/icones/m16.png">

                                            </form>

                                        </td>
                                    </tr>
                                    {foreachelse}
                                    <tr>
                                        <td colspan="7">
                                            Aucune commande trouvé
                                        </td>
                                    </tr>
                                {/foreach}

                                </tbody>

                            </table>
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

    <script src="public/assets/js/commande.js"></script>


    <script type="text/javascript">
        $(document).ready(function () {
            $('#bootstrap-data-table-export').DataTable();
        });
    </script>

</body>
</html>
