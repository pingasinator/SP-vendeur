<?php
/* Smarty version 4.5.5, created on 2026-06-29 09:17:04
  from '/opt/lampp/htdocs/SP-vendeur/mvc-sp/mod_authentification/vue/authentificationVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a421bf0525b02_87938538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2f33a7605a4027437444ca780d602d81a12f65d' => 
    array (
      0 => '/opt/lampp/htdocs/SP-vendeur/mvc-sp/mod_authentification/vue/authentificationVue.tpl',
      1 => 1782717278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a421bf0525b02_87938538 (Smarty_Internal_Template $_smarty_tpl) {
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
    <title>Seraphin Parys</title>
    <meta name="description" content="A COMPLETER">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="public/favicon.ico">

    <link rel="stylesheet" href="public/assets/css/normalize.css">
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/assets/css/themify-icons.css">
    <link rel="stylesheet" href="public/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="public/assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="public/assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
> -->

</head>
<body class="bg-dark">


<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="login-logo">

                <h3 class="titre-pLogin">Seraphin Parys</h3>

            </div>
            <div>


            </div>

            <div class="login-form">
                <!--MESSAGE ERREUR ICI-->
                <?php if ($_smarty_tpl->tpl_vars['errorMessage']->value != '') {?>
                    <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['errorMessage']->value;?>
</div>
                <?php }?>

                <form method="POST" action="index.php">
                    <input type="hidden" class="form-control" name="gestion" value="authentification">
                    <input type="hidden" class="form-control" name="action" value="validation_authentification">
                    <div class="form-group">
                        <label><br></label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                            <input type="text" class="form-control" placeholder="Identifiant" name="login"
                                   value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label><br></label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>


                            <input type="password" class="form-control" placeholder="Mot de passe" name="password"
                                   value="">
                        </div>
                        <label><br></label>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Connexion</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php echo '<script'; ?>
 src="public/assets/js/vendor/jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/assets/js/popper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/assets/js/plugins.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/assets/js/main.js"><?php echo '</script'; ?>
>


</body>
</html>
<?php }
}
