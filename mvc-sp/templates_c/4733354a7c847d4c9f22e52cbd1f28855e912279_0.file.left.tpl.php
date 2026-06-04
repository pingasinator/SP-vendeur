<?php
/* Smarty version 4.5.5, created on 2026-06-04 13:10:03
  from '/opt/lampp/htdocs/SP-vendeur/mvc-sp/public/left.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_6a215d0b6de181_48390678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4733354a7c847d4c9f22e52cbd1f28855e912279' => 
    array (
      0 => '/opt/lampp/htdocs/SP-vendeur/mvc-sp/public/left.tpl',
      1 => 1780558050,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a215d0b6de181_48390678 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <a href="left.tpl"></a>
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#A VOUS D'ECRIRE LE LIEN">Séraphin PARYS</a>
                <a class="navbar-brand hidden" href="#A VOUS D'ECRIRE LE LIEN">G</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Accueil </a>
                    </li>
                    <h3 class="menu-title">ADMINISTRATION</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Clients</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="index.php?gestion=client">Liste</a></li>
                            <li><i class="fa fa-id-badge"></i>
                                <form action="index.php" method="post">
                                    <input type="hidden" name="gestion" value="client">
                                    <input type="hidden" name="action" value="form_ajouter">
                                    <input type="submit" value="Nouveau" class="fa fa-id-badge">
                                </form>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Produits</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="index.php?gestion=produit">Liste</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <form action="index.php" method="post" class="">
                            <input type="hidden" name="gestion" value="profil">
                            <input type="hidden" name="action" value="form_modifier">
                            <input type="submit" value="Mon profil" class="fa fa-id-badge menu-icon fa-th">
                        </form>
                        
                    </li>

                    <h3 class="menu-title">COMMANDES</h3><!-- /.menu-title -->

                    <li class="dropdown">
                        <a href="#A VOUS D'ECRIRE LE LIEN"> <i class="menu-icon fa fa-tasks"></i>Historique</a>
                         
                        
                    </li>
                    <li>
                        <a href="#"> <i class="menu-icon ti-email"></i>Passer une commande </a>
                    </li>
                   
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel --><?php }
}
