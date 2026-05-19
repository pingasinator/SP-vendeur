<?php
/* Smarty version 4.5.5, created on 2026-05-19 14:03:08
  from 'C:\laragon\www\SP-vendeur\mvc-sp\mod_produit\vue\produitModificationFicheVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a0c6d9c035618_75552955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15d80c1874594d64efb298789ee1a3b05d8b8f1e' => 
    array (
      0 => 'C:\\laragon\\www\\SP-vendeur\\mvc-sp\\mod_produit\\vue\\produitModificationFicheVue.tpl',
      1 => 1779199385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/left.tpl' => 1,
    'file:public/header.tpl' => 1,
  ),
),false)) {
function content_6a0c6d9c035618_75552955 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
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
    <title>Séraphin PARYS - <?php echo $_smarty_tpl->tpl_vars['titrePage']->value;?>
</title>
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['titrePage']->value;?>
">
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

    <!-- <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
> -->

</head>
<body>


<!-- Left Panel -->


<?php $_smarty_tpl->_subTemplateRender('file:public/left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- FIN : Left Panel -->


<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!--Header -->

    <?php $_smarty_tpl->_subTemplateRender('file:public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
                        <li class="active"><?php echo $_smarty_tpl->tpl_vars['titrePage']->value;?>
</li>
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
                        <div class="card-header"><strong><?php echo $_smarty_tpl->tpl_vars['titrePage']->value;?>
</strong></div>
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
                                            value="<?php echo $_smarty_tpl->tpl_vars['unProduit']->value->getReference();?>
">

                                </div>
                                <div class="form-group">
                                    <label for="designation" class="">Désignation :</label>
                                    <input
                                            type="text"
                                            id="designation"
                                            name="designation"
                                            class="form-control"
                                            value="<?php echo $_smarty_tpl->tpl_vars['unProduit']->value->getDesignation();?>
">

                                </div>
                                <div class="form-group">
                                    <label for="poids_piece" class="">Poids pièce :</label>
                                    <input
                                            type="text"
                                            id="poids_piece"
                                            name="poids_piece"
                                            class="form-control"
                                            value="<?php echo $_smarty_tpl->tpl_vars['unProduit']->value->getPoids_Piece();?>
">

                                </div>
                                <div class="form-group">
                                    <label for="prix_unitaire_ht" class="">Prix unitaire(HT) :</label>
                                    <input
                                            type="text"
                                            id="prix_unitaire_ht"
                                            name="prix_unitaire_ht"
                                            class="form-control"
                                            value="<?php echo $_smarty_tpl->tpl_vars['unProduit']->value->getPrix_Unitaire_HT();?>
">

                                </div>
                                <div class="form-group">
                                    <label for="quantite" class="">Quantité : </label>
                                    <input
                                            type="text"
                                            id="quantite"
                                            name="quantite"
                                            class="form-control"
                                            value="<?php echo $_smarty_tpl->tpl_vars['unProduit']->value->getQuantite();?>
">

                                </div>
                                <div class="form-group">
                                    <label for="descriptif" class="">Descriptif : </label>
                                    <input
                                            type="text"
                                            id="descriptif"
                                            name="descriptif"
                                            class="form-control"
                                            value="<?php echo $_smarty_tpl->tpl_vars['unProduit']->value->getDescriptif();?>
">

                                </div>
                                <div class="form-group">
                                    <label for="quantite" class="">Stock : </label>
                                    <input
                                            type="text"
                                            id="stock"
                                            name="stock"
                                            class="form-control"
                                            value="<?php echo $_smarty_tpl->tpl_vars['unProduit']->value->getStock();?>
">

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
                                    <input type="hidden" name="action" value="form_valider_mofication">
                                    <input type="hidden" name="codec" value="<?php echo $_smarty_tpl->tpl_vars['unProduit']->value->getReference();?>
">
                                    <input type="submit" class="btn btn-submit" value="Valider">
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
    <?php echo '<script'; ?>
 src="public/assets/js/vendor/jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/plugins.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/main.js"><?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/datatables.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/dataTables.buttons.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/buttons.bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/jszip.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/pdfmake.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/vfs_fonts.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/buttons.html5.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/buttons.print.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/buttons.colVis.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/lib/data-table/datatables-init.js"><?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function () {
            $('#bootstrap-data-table-export').DataTable();
        });
    <?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
