<?php
/* Smarty version 4.5.5, created on 2026-08-04 12:49:04
  from 'C:\laragon\www\SP-vendeur\mvc-sp\mod_commande\vue\commandeFicheEnregistrementVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a71dfc0520a70_75132425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a74792049a506228b5a9ec22d6bffd8f59f10ba2' => 
    array (
      0 => 'C:\\laragon\\www\\SP-vendeur\\mvc-sp\\mod_commande\\vue\\commandeFicheEnregistrementVue.tpl',
      1 => 1785847740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/left.tpl' => 1,
    'file:public/header.tpl' => 1,
  ),
),false)) {
function content_6a71dfc0520a70_75132425 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" href="public/assets/css/bootstrap-datepicker.css">
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
                    <form id="form-panier" class="d-flex flex-row justify-content-between" action="index.php" method="post">
                        <input type="hidden" name="gestion" value="commande">
                        <div class="card">
                            <div class="card-header "><strong>Fiche Commande : Enregistrement</strong></div>
                            <div class="card-body d-flex flex-column">
                                <?php if ($_smarty_tpl->tpl_vars['Mode']->value === "Consulter" || $_smarty_tpl->tpl_vars['Mode']->value === "Modifier") {?>
                                    <label>Numéro : <?php echo $_smarty_tpl->tpl_vars['commande']->value->getNumero();?>
</label>
                                    <label>Vendeur : <?php echo $_smarty_tpl->tpl_vars['commande']->value->getCodev();?>
 - <?php echo $_smarty_tpl->tpl_vars['commande']->value->getVendeur();?>
</label>
                                    <label>Code Client : <?php echo $_smarty_tpl->tpl_vars['commande']->value->getCodec();?>
</label>
                                    <label>Client : <?php echo $_smarty_tpl->tpl_vars['commande']->value->getClient();?>
</label>
                                <?php } else { ?>
                                    <input type="hidden" name="action" value="form_valider_enregistrement_panier">
                                    <label>Date de la commande : <input name="date_Commande" type="text" value="<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
" readonly></label>
                                    <label>Client :
                                        <select id="client" name="codec">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Clients']->value, 'client');
$_smarty_tpl->tpl_vars['client']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->do_else = false;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['client']->value->getCodec();?>
"><?php echo $_smarty_tpl->tpl_vars['client']->value->getNom();?>
</option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </label>
                                    <label>Vendeur : <?php echo $_smarty_tpl->tpl_vars['vendeur']->value->getCodev();?>
 - <?php echo $_smarty_tpl->tpl_vars['vendeur']->value->getPrenom();?>
 <?php echo $_smarty_tpl->tpl_vars['vendeur']->value->getNom();?>
<input type="hidden" name="codev" value="<?php echo $_smarty_tpl->tpl_vars['vendeur']->value->getCodev();?>
"></label>
                                <?php }?>


                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header"><strong>Etat de la Commande</strong></div>
                            <div class="card-body d-flex flex-column">
                                <?php if ($_smarty_tpl->tpl_vars['Mode']->value === "Consulter" || $_smarty_tpl->tpl_vars['Mode']->value === "Modifier") {?>
                                    <label>Date de commande : <?php echo $_smarty_tpl->tpl_vars['commande']->value->getDate_commande();?>
</label>
                                    <label class="d-flex flex-row">Date de la livraison :
                                        <?php if ($_smarty_tpl->tpl_vars['Mode']->value === "Modifier") {?>
                                            <input type="hidden" name="action" value="form_valider_modifier_commande">
                                            <input type="hidden"  name="numero" value="<?php echo $_smarty_tpl->tpl_vars['commande']->value->getNumero();?>
">
                                            <div class="input-group input-daterange">
                                                <input type="text" name="date_Livraison" class="form-control" value="">
                                            </div>
                                        <?php } else { ?>
                                            <?php echo $_smarty_tpl->tpl_vars['commande']->value->getDate_Livraison();?>

                                        <?php }?>
                                    </label>
                                    <label>Total HT (en €) : <?php echo $_smarty_tpl->tpl_vars['commande']->value->getTotal_HT();?>
 €</label>
                                    <label>Commande validée :  <?php if ($_smarty_tpl->tpl_vars['commande']->value->getValide()) {?>OUI<?php } else { ?>NON<?php }?> </label>
                                <?php } else { ?>
                                    <label>Date de la livraison :
                                        <div class="input-group input-daterange">
                                            <input type="text" name="date_Livraison" class="form-control" value="">
                                        </div>
                                    </label>
                                    <label>Total HT (en €) : <input type="text" name="total_HT" value="<?php echo $_smarty_tpl->tpl_vars['totalCommande']->value;?>
" readonly></label>
                                    <label>TVA (en €) : <input type="text" name="total_TVA" value="<?php echo $_smarty_tpl->tpl_vars['totalTVA']->value;?>
" readonly></label>
                                <?php }?>
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
                                    <?php if ($_smarty_tpl->tpl_vars['Mode']->value === "Consulter" || $_smarty_tpl->tpl_vars['Mode']->value === "Modifier") {?>
                                        <th>Prix</th>
                                        <?php if ($_smarty_tpl->tpl_vars['Mode']->value === "Modifier") {?>
                                            <th class="pos-actions">Modifier</th>
                                        <?php }?>
                                    <?php } else { ?>
                                        <th>total</th>
                                    <?php }?>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if ($_smarty_tpl->tpl_vars['Mode']->value === "Consulter" || $_smarty_tpl->tpl_vars['Mode']->value === "Modifier") {?>
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
                                        <td><?php if ($_smarty_tpl->tpl_vars['Mode']->value === "Modifier") {?><input form="form_<?php echo $_smarty_tpl->tpl_vars['ligne']->value->getNumeroLigne();?>
" type="text" name="quantite" value="<?php echo $_smarty_tpl->tpl_vars['ligne']->value->getQuantite();?>
"><?php } else {
echo $_smarty_tpl->tpl_vars['ligne']->value->getQuantite();
}?></td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['ligne']->value->getPrixVente();?>
</td>
                                        <?php if ($_smarty_tpl->tpl_vars['Mode']->value === "Modifier") {?>
                                            <td class="pos-actions">
                                                <form id="form_<?php echo $_smarty_tpl->tpl_vars['ligne']->value->getNumeroLigne();?>
" action="index.php" method="post">
                                                    <input type="hidden" name="gestion" value="commande">
                                                    <input type="hidden" name="action" value="form_modifier_ligne_commande">
                                                    <input type="hidden" name="numero" value="<?php echo $_smarty_tpl->tpl_vars['commande']->value->getNumero();?>
">
                                                    <input type="hidden" name="numeroLigne" value="<?php echo $_smarty_tpl->tpl_vars['ligne']->value->getNumeroLigne();?>
">
                                                    <input type="image"  id="pImage"  name="btn_consulter" src="public/images/icones/m16.png">
                                                </form>
                                            </td>
                                        <?php }?>
                                    </tr>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php } else { ?>
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
                                            <td><?php echo $_smarty_tpl->tpl_vars['ligne']->value->getPrixTotal();?>
</td>
                                        </tr>
                                        <?php
}
if ($_smarty_tpl->tpl_vars['ligne']->do_else) {
?>
                                        <tr>
                                            <td colspan="6">
                                                Aucune produit trouvé
                                            </td>
                                        </tr>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>

                                </tbody>
                            </table>
                            <div class="card-body">
                                <div class=" d-flex justify-content-between">
                                    <?php if ($_smarty_tpl->tpl_vars['Mode']->value === "Consulter" || $_smarty_tpl->tpl_vars['Mode']->value === "Modifier") {?>
                                        <span>Montant de la commande : <?php echo $_smarty_tpl->tpl_vars['totalCommande']->value;?>
 €</span>
                                        <span>Total TVA : <?php echo $_smarty_tpl->tpl_vars['commande']->value->getTotal_TVA();?>
 €</span>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="">
                                    <?php if ($_smarty_tpl->tpl_vars['Mode']->value === "Consulter") {?>
                                        <input type="button" class="btn btn-submit" value="Retour" onclick="location.href='index.php?gestion=commande'">
                                        <?php if (!$_smarty_tpl->tpl_vars['commande']->value->getEtat() && !$_smarty_tpl->tpl_vars['commande']->value->getValide()) {?>
                                            <input type="button" class="btn btn-submit" value="Modifier" onclick="location.href='index.php?gestion=commande&action=form_modifier_commande&numero=<?php echo $_smarty_tpl->tpl_vars['commande']->value->getNumero();?>
'">
                                        <?php }?>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['Mode']->value === "Modifier") {?>
                                        <input type="button" class="btn btn-submit" value="Retour" onclick="location.href='index.php?gestion=commande&action=form_consulter_commande&numero=<?php echo $_smarty_tpl->tpl_vars['commande']->value->getNumero();?>
'">
                                        <input type="submit" form="form-panier"  class="btn btn-submit" value="Finaliser">
                                    <?php } else { ?>
                                        <input type="button" class="btn btn-submit" value="Retour à la commande" onclick="location.href='index.php?gestion=commande&action=form_ajouter'">
                                        <input type="submit" form="form-panier" class="btn btn-submit" value="Valider">
                                    <?php }?>
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
 src="public/assets/js/bootstrap-datepicker.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/assets/js/commande.js"><?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function () {
            $('#bootstrap-data-table-export').DataTable();
        });

        $('.input-daterange input').each(function() {
            $(this).datepicker('clearDates');
        });
    <?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
