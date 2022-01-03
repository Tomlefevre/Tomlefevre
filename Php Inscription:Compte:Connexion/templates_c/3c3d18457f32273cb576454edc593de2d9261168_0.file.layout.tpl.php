<?php
/* Smarty version 3.1.34-dev-7, created on 2022-01-03 16:54:35
  from '/Applications/MAMP/htdocs/TD4/templates/layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61d32a4b673389_91096694',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c3d18457f32273cb576454edc593de2d9261168' => 
    array (
      0 => '/Applications/MAMP/htdocs/TD4/templates/layout.tpl',
      1 => 1639741124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61d32a4b673389_91096694 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170330549561d32a4b6631b3_93902720', 'title');
?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125211737261d32a4b6662e8_48028464', 'head');
?>

</head>
<body>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195375619761d32a4b6696e7_58620365', 'menu');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_43731004461d32a4b6711e1_03618854', 'body');
?>

</body>
</html>
<?php }
/* {block 'title'} */
class Block_170330549561d32a4b6631b3_93902720 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_170330549561d32a4b6631b3_93902720',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_125211737261d32a4b6662e8_48028464 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_125211737261d32a4b6662e8_48028464',
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
class Block_195375619761d32a4b6696e7_58620365 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_195375619761d32a4b6696e7_58620365',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['user']->value))) {?> <!--Verification si user est déclarée et est différente de null -->
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
class Block_43731004461d32a4b6711e1_03618854 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_43731004461d32a4b6711e1_03618854',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Contenu générique<?php
}
}
/* {/block 'body'} */
}
