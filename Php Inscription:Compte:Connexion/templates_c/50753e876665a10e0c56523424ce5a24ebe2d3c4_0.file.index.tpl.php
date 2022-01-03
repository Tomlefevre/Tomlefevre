<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-12 18:31:33
  from '/Applications/MAMP/htdocs/ FINI TD4/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61b6400582f182_69437865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50753e876665a10e0c56523424ce5a24ebe2d3c4' => 
    array (
      0 => '/Applications/MAMP/htdocs/ FINI TD4/templates/index.tpl',
      1 => 1639333338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b6400582f182_69437865 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81710860361b640057ff650_56183802', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22611388061b6400580d108_22358788', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_81710860361b640057ff650_56183802 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_81710860361b640057ff650_56183802',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Accueil<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_22611388061b6400580d108_22358788 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_22611388061b6400580d108_22358788',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id='main'>

    <?php if ((isset($_smarty_tpl->tpl_vars['user']->value))) {?>
        <h1>Home</h1>
        <p>Bienvenue ! <?php echo $_SESSION['user']['nom'];?>
</p>

        <div>
            <a href='profil'>profil</a>
            <a href='logout'>Me déconnecter</a>
        </div>
    <?php } else { ?>
        <h1>Home</h1>
        <<p>Contenu du site </p>
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
