<?php
/* Smarty version 3.1.34-dev-7, created on 2022-01-03 16:54:35
  from '/Applications/MAMP/htdocs/TD4/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61d32a4b631c61_99254164',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49b6c7c7b26d90610796d3969490f18abf23f45c' => 
    array (
      0 => '/Applications/MAMP/htdocs/TD4/templates/index.tpl',
      1 => 1639741107,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61d32a4b631c61_99254164 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52093352661d32a4b604f86_16291279', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137175368861d32a4b60f082_11771745', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_52093352661d32a4b604f86_16291279 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_52093352661d32a4b604f86_16291279',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Accueil<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_137175368861d32a4b60f082_11771745 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_137175368861d32a4b60f082_11771745',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id='main'>
    <?php if ((isset($_smarty_tpl->tpl_vars['user']->value))) {?> <!--Verification si user est déclarée et est différente de null -->
        <h1>Home</h1>
        <p>Bienvenue ! <?php echo $_SESSION['user']['nom'];?>
</p>
        <div>
            <a href='profil'>profil</a>
            <a href='logout'>Me déconnecter</a>
        </div>
    <?php } else { ?>
        <h1>Home</h1>
        <p>Contenu du site </p>
        <div>
            <a href='register'>inscription</a>
            <a href='login'>connexion</a>
        </div>
    <?php }?>
</div>
<?php
}
}
/* {/block 'body'} */
}
