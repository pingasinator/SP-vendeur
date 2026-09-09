<?php
/* Smarty version 4.5.5, created on 2026-07-28 08:06:55
  from 'C:\laragon\www\SP-vendeur\mvc-sp\mod_commande\vue\commandeListeProduitsVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a68631f2c2e22_30162368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd13a1032440335130e3bcb0cfdaeccb890b68a60' => 
    array (
      0 => 'C:\\laragon\\www\\SP-vendeur\\mvc-sp\\mod_commande\\vue\\commandeListeProduitsVue.tpl',
      1 => 1784901380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/left.tpl' => 1,
    'file:public/header.tpl' => 1,
  ),
),false)) {
function content_6a68631f2c2e22_30162368 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <!-- PLACER LE FIL D'ARIANE -->
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="index.php?gestion=commande">Commandes</a></li>
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
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card">
                                <div class="card-header">Voir le panier</div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-7">
                                            <label for="total">Total HT (en €) : <input id="total" type="text" class="" value="<?php echo $_smarty_tpl->tpl_vars['totalHT']->value;?>
" readonly></label>
                                        </div>

                                        <div class="col-sm-12 col-md-5">
                                            <label for="quantite">Quantité d'articel(s) dans le panier : <input id="quantite" type="text" value="<?php echo $_smarty_tpl->tpl_vars['nbArticles']->value;?>
" readonly></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <!-- PLACER LA LISTE DES PRODUITS -->
                                <thead>
                                    <tr>
                                        <th>Référence</th>
                                        <th>désignation</th>
                                        <th>Stock</th>
                                        <th>Tarif HT</th>
                                        <th>Prix de vente</th>
                                        <th class="pos-actions">Quantité</th>
                                        <th class="pos-actions">Ajouter</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeProduits']->value, 'produit');
$_smarty_tpl->tpl_vars['produit']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['produit']->value) {
$_smarty_tpl->tpl_vars['produit']->do_else = false;
?>
                                    <tr>
                                        <form id="form_ajouter_<?php echo $_smarty_tpl->tpl_vars['produit']->value->getReference();?>
" action="index.php" method="post">
                                            <input type="hidden" name="gestion" value="commande">
                                            <input type="hidden" name="action" value="form_ajouter_panier">
                                            <input type="hidden" name="reference" value="<?php echo $_smarty_tpl->tpl_vars['produit']->value->getReference();?>
">
                                        </form>
                                        <td><input type="hidden" form="form_ajouter_<?php echo $_smarty_tpl->tpl_vars['produit']->value->getReference();?>
" name="reference" value="<?php echo $_smarty_tpl->tpl_vars['produit']->value->getReference();?>
"><?php echo $_smarty_tpl->tpl_vars['produit']->value->getReference();?>
</td>
                                        <td><input type="hidden" form="form_ajouter_<?php echo $_smarty_tpl->tpl_vars['produit']->value->getReference();?>
" name="designation" value="<?php echo $_smarty_tpl->tpl_vars['produit']->value->getDesignation();?>
" ><?php echo $_smarty_tpl->tpl_vars['produit']->value->getDesignation();?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['produit']->value->getStock();?>
</td>
                                        <td><input type="hidden" form="form_ajouter_<?php echo $_smarty_tpl->tpl_vars['produit']->value->getReference();?>
" name="prixUnitaireHT" value="<?php echo $_smarty_tpl->tpl_vars['produit']->value->getPrix_Unitaire_HT();?>
" ><?php echo $_smarty_tpl->tpl_vars['produit']->value->getPrix_Unitaire_HT();?>
</td>
                                        <td><input type="hidden" form="form_ajouter_<?php echo $_smarty_tpl->tpl_vars['produit']->value->getReference();?>
" name="prixVente" value="<?php echo $_smarty_tpl->tpl_vars['produit']->value->getPrix_Unitaire_HT()*1.36;?>
" ><?php echo $_smarty_tpl->tpl_vars['produit']->value->getPrix_Unitaire_HT()*1.36;?>
</td>
                                        <td>
                                            <input type="text" class="form-control" form="form_ajouter_<?php echo $_smarty_tpl->tpl_vars['produit']->value->getReference();?>
"  name="quantite" >
                                        </td>
                                        <td class="pos-actions">
                                            <input type="image" form="form_ajouter_<?php echo $_smarty_tpl->tpl_vars['produit']->value->getReference();?>
" id="pImage"  name="btn_consulter" src="public/images/icones/a16.png">
                                        </td>
                                    </tr>
                                    <?php
}
if ($_smarty_tpl->tpl_vars['produit']->do_else) {
?>
                                    <tr>
                                        <td colspan="7">
                                            Aucune produit trouvé
                                        </td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </tbody>
                            </table>
                        </div>
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
 src="public/assets/js/commande.js"><?php echo '</script'; ?>
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
