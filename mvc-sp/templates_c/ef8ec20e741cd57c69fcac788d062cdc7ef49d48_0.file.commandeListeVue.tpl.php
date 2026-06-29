<?php
/* Smarty version 4.5.5, created on 2026-06-29 09:39:36
  from '/opt/lampp/htdocs/SP-vendeur/mvc-sp/mod_commande/vue/commandeListeVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a422138b8d566_22662943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef8ec20e741cd57c69fcac788d062cdc7ef49d48' => 
    array (
      0 => '/opt/lampp/htdocs/SP-vendeur/mvc-sp/mod_commande/vue/commandeListeVue.tpl',
      1 => 1782718750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/left.tpl' => 1,
    'file:public/header.tpl' => 1,
  ),
),false)) {
function content_6a422138b8d566_22662943 (Smarty_Internal_Template $_smarty_tpl) {
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
        <?php if ($_smarty_tpl->tpl_vars['errorMessage']->value != '') {?>
            <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['errorMessage']->value;?>
</div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['messageSuccess']->value != '') {?>
            <div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['messageSuccess']->value;?>
</div>
        <?php }?>

        <div class="animated fadeIn">

            <div class="row">

                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title"><?php echo $_smarty_tpl->tpl_vars['titrePage']->value;?>


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
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeCommmandes']->value, 'commande');
$_smarty_tpl->tpl_vars['commande']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['commande']->value) {
$_smarty_tpl->tpl_vars['commande']->do_else = false;
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['commande']->value->getNumero();?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['commande']->value->getVendeur();?>
</td>
                                        <td>
                                            <button onclick="displayClient(<?php echo $_smarty_tpl->tpl_vars['commande']->value->getCodec();?>
)" class="button-client"><?php echo $_smarty_tpl->tpl_vars['commande']->value->getCodec();?>
 - <?php echo $_smarty_tpl->tpl_vars['commande']->value->getClient();?>
</button>
                                        </td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['commande']->value->getTotal_HT();?>
</td>
                                        <td class="pos-actions">
                                            <form action="index.php" method="post">
                                                <input type="hidden" name="gestion" value="commande">
                                                <input type="hidden" name="action" value="form_consulter">
                                                <input type="hidden" name="codec" value="<?php echo $_smarty_tpl->tpl_vars['commande']->value->getCodec();?>
">
                                                <input
                                                        type="image"
                                                        id="pImage"
                                                        name="btn_consulter"
                                                        src="public/images/icones/p16.png">

                                            </form>
                                        </td>
                                        <td class="pos-actions">
                                            <form action="index.php" method="post">
                                                <input type="hidden" name="gestion" value="commande">
                                                <input type="hidden" name="action" value="form_modifier">
                                                <input type="hidden" name="codec" value="<?php echo $_smarty_tpl->tpl_vars['commande']->value->getCodec();?>
">
                                                <input
                                                        type="image"
                                                        id="mImage"
                                                        name="btn_modifier"
                                                        src="public/images/icones/m16.png">

                                            </form>

                                        </td>
                                    </tr>
                                    <?php
}
if ($_smarty_tpl->tpl_vars['commande']->do_else) {
?>
                                    <tr>
                                        <td colspan="7">
                                            Aucune commande trouvé
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
