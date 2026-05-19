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
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="index.php?gestion=produit">Produits</a></li>
                        <li class="active">{$titrePage}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">

            <div class="row">

                <div class="col-md-6">

                    <div class="card">
                        <div class="card-header"><strong>{$titrePage}</strong></div>
                        <form action="index.php" method="POST">

                            <input type="hidden" name="gestion" value="produit">

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="reference" class="">Référence :</label>
                                    <input
                                            type="text"
                                            id="reference"
                                            name="reference"
                                            class="form-control"
                                            readonly="readonly"
                                            value="{$unProduit->getReference()}">

                                </div>
                                <div class="form-group">
                                    <label for="designation" class="">Désignation :</label>
                                    <input
                                            type="text"
                                            id="designation"
                                            name="designation"
                                            class="form-control"
                                            readonly="readonly"
                                            value="{$unProduit->getDesignation()}">

                                </div>
                                <div class="form-group">
                                    <label for="poid_piece" class="">Poid pièce :</label>
                                    <input
                                            type="text"
                                            id="poid_piece"
                                            name="poid_piece"
                                            class="form-control"
                                            readonly="readonly"
                                            value="{$unProduit->getPoid_Piece()}">

                                </div>
                                <div class="form-group">
                                    <label for="prix_unitaire_ht" class="">Prix unitaire(HT) :</label>
                                    <input
                                            type="text"
                                            id="prix_unitaire_ht"
                                            name="prix_unitaire_ht"
                                            class="form-control"
                                            readonly="readonly"
                                            value="{$unProduit->getPrix_Unitaire_HT()}">

                                </div>
                                <div class="form-group">
                                    <label for="quantite" class="">Quantité : </label>
                                    <input
                                            type="text"
                                            id="quantite"
                                            name="quantite"
                                            class="form-control"
                                            readonly="readonly"
                                            value="{$unProduit->getQuantite()}">

                                </div>
                                <div class="form-group">
                                    <label for="descriptif" class="">Descriptif : </label>
                                    <input
                                            type="text"
                                            id="descriptif"
                                            name="descriptif"
                                            class="form-control"
                                            readonly="readonly"
                                            value="{$unProduit->getDescriptif()}">

                                </div>
                            </div>

                            <div class="card-body">
                                <div class="col-md-6">
                                    <input type="button"
                                           class="btn btn-submit"
                                           value="Retour"
                                           onclick="location.href='index.php?gestion=produit'">
                                </div>
                                <div class="col-md-6">
                                    <input type="hidden" name="gestion" value="produit">
                                    <input type="hidden" name="action" value="form_modifier">
                                    <input type="hidden" name="codec" value="{$unProduit->getReference()}">
                                    <input type="submit" class="btn btn-submit" value="Modifier">
                                </div>
                                <br>
                            </div>

                        </form>
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


    <script type="text/javascript">
        $(document).ready(function () {
            $('#bootstrap-data-table-export').DataTable();
        });
    </script>

</body>
</html>
