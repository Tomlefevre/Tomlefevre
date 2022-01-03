<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-13 11:53:44
  from '/Applications/MAMP/htdocs/FINI _D4/templates/layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61b73448970417_38584059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c010a3393d6145d86b6c822f4c222ddbfa2bd05d' => 
    array (
      0 => '/Applications/MAMP/htdocs/FINI _D4/templates/layout.tpl',
      1 => 1639396422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b73448970417_38584059 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109588266461b7344894d2e8_13998525', 'title');
?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28324769761b73448956eb3_47494455', 'head');
?>

</head>
<body>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190136646461b7344895a103_68334775', 'menu');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146967706561b7344896dcb9_91046692', 'body');
?>

</body>
</html>
<?php }
/* {block 'title'} */
class Block_109588266461b7344894d2e8_13998525 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_109588266461b7344894d2e8_13998525',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_28324769761b73448956eb3_47494455 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_28324769761b73448956eb3_47494455',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/pure-min.css" integrity="sha384-cg6SkqEOCV1NbJoCu11+bm0NvBRc8IYLRGXkmNrqUBfTjmMYwNKPWBTIKyw9mHNJ" crossorigin="anonymous">
    <style>
    #main,footer{ padding:1em }
    </style>
    <link rel="stylesheet" href="templates/style.css">
    <?php
}
}
/* {/block 'head'} */
/* {block 'menu'} */
class Block_190136646461b7344895a103_68334775 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_190136646461b7344895a103_68334775',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['user']->value))) {?>
        <p class="blockBleu">Connecté</p>
    <?php } else { ?>
        <p class="blockBleu">Non connecté</p>
    <?php }?>
<p>Menu de navigation générique défini dans layout.tpl</p>
<a href='./'>Index</a>
<a href='register'>Inscription</a>
<a href='login'>Connexion</a>
<a href='profil'>Profil</a>
<?php
}
}
/* {/block 'menu'} */
/* {block 'body'} */
class Block_146967706561b7344896dcb9_91046692 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_146967706561b7344896dcb9_91046692',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Contenu générique<?php
}
}
/* {/block 'body'} */
}
