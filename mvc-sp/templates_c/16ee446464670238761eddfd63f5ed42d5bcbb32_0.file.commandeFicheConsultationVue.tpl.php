<?php
/* Smarty version 4.5.5, created on 2026-07-27 08:16:05
  from 'C:\laragon\www\SP-vendeur\mvc-sp\mod_commande\vue\commandeFicheConsultationPanierVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a6713c54c99f5_76449115',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16ee446464670238761eddfd63f5ed42d5bcbb32' => 
    array (
      0 => 'C:\\laragon\\www\\SP-vendeur\\mvc-sp\\mod_commande\\vue\\commandeFicheConsultationPanierVue.tpl',
      1 => 1785140130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/left.tpl' => 1,
    'file:public/header.tpl' => 1,
  ),
),false)) {
function content_6a6713c54c99f5_76449115 (Smarty_Internal_Template $_smarty_tpl) {
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
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <!-- PLACER LA LISTE DES PRODUITS -->
                                <thead>
                                <tr>
                                    <th>N° de ligne</th>
                                    <th>Référence</th>
                                    <th>désignation</th>
                                    <th>Quantité</th>
                                    <th>Tarif HT</th>
                                    <th>Prix de vente</th>
                                    <th>total</th>
                                    <th class="pos-actions">Modifier</th>
                                    <th class="pos-actions">Supprimer</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Panier']->value, 'ligne');
$_smarty_tpl->tpl_vars['ligne']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ligne']->value) {
$_smarty_tpl->tpl_vars['ligne']->do_else = false;
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['ligne']->value->getNumeroLigne();?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['ligne']->value->getReference();?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['ligne']->value->getDesignation();?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['ligne']->value->getQuantite();?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['ligne']->value->getPrixUnitaireHT();?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['ligne']->value->getPrixVente();?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['ligne']->value->getPrixTotal();?>
</td>
                                        <td class="pos-actions">
                                            <form action="index.php" method="post">
                                                <input type="hidden" name="gestion" value="commande">
                                                <input type="hidden" name="action" value="form_consulter">
                                                <input type="image"  id="pImage"  name="btn_consulter" src="public/images/icones/m16.png">

                                            </form>
                                        </td>
                                        <td class="pos-actions">
                                            <form action="index.php" method="post">
                                                <input type="hidden" name="gestion" value="commande">
                                                <input type="hidden" name="action" value="form_consulter">
                                                <input type="image"  id="pImage"  name="btn_consulter" src="public/images/icones/s16.png">
                                            </form>
                                        </td>
                                    </tr>
                                    <?php
}
if ($_smarty_tpl->tpl_vars['ligne']->do_else) {
?>
                                    <tr>
                                        <td colspan="9">
                                            Aucune produit trouvé
                                        </td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </tbody>
                            </table>
                            <div class="card-body">
                                <div class=" d-flex justify-content-between">
                                    <label> Montant de la commande : <input type="text" class="" value="<?php echo $_smarty_tpl->tpl_vars['totalCommande']->value;?>
" readonly></label>
                                    <label> Total TVA : <input type="text" class="" value="<?php echo $_smarty_tpl->tpl_vars['totalTVA']->value;?>
" readonly></label>
                                    <label> Marge Brute : <input type="text" class="" value="<?php echo $_smarty_tpl->tpl_vars['margeBrute']->value;?>
" readonly></label>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <input type="button" class="btn btn-submit" value="Retour à la commande" onclick="location.href='index.php?gestion=commande&action=form_ajouter'">
                                    <input type="button" class="btn btn-submit " value="Poursuivre" onclick="location.href='index.php?gestion=commande&action=form_enregistrement_panier'">
                                </div>
                            </div>
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
