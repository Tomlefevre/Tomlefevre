<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-11 20:17:46
  from 'C:\laragon\www\tps\TP4\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61b5076ae897c3_37878678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e169a41f696852c206a18a01eb8eeee6224c0ff3' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\TP4\\templates\\layout.tpl',
      1 => 1639253769,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b5076ae897c3_37878678 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118765332861b5076ae866a3_66219269', 'title');
?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69154553561b5076ae87179_21888190', 'head');
?>

</head>
<body>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145202158261b5076ae87de0_65236299', 'menu');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170633457161b5076ae89196_91985401', 'body');
?>


</body>
</html>
<?php }
/* {block 'title'} */
class Block_118765332861b5076ae866a3_66219269 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_118765332861b5076ae866a3_66219269',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_69154553561b5076ae87179_21888190 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_69154553561b5076ae87179_21888190',
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
class Block_145202158261b5076ae87de0_65236299 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_145202158261b5076ae87de0_65236299',
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
<a href='./'>index</a>
<a href='register'>inscription</a> 
<a href='login'>connexion</a> 
<a href='profil'>profil</a> 

<?php
}
}
/* {/block 'menu'} */
/* {block 'body'} */
class Block_170633457161b5076ae89196_91985401 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_170633457161b5076ae89196_91985401',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Contenu générique<?php
}
}
/* {/block 'body'} */
}
