<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-12 18:31:33
  from '/Applications/MAMP/htdocs/ FINI TD4/templates/layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61b64005869a48_20022413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b72c9acf0afa46e28c34546962280af485e4b09f' => 
    array (
      0 => '/Applications/MAMP/htdocs/ FINI TD4/templates/layout.tpl',
      1 => 1639333338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b64005869a48_20022413 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87803875561b6400585a843_93353880', 'title');
?>
</title>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138881996461b6400585df21_72073606', 'head');
?>

</head>
<body>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174843662161b64005861655_08800474', 'menu');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210957236661b64005867811_10685776', 'body');
?>


</body>
</html>
<?php }
/* {block 'title'} */
class Block_87803875561b6400585a843_93353880 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_87803875561b6400585a843_93353880',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Page Title<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_138881996461b6400585df21_72073606 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_138881996461b6400585df21_72073606',
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
class Block_174843662161b64005861655_08800474 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_174843662161b64005861655_08800474',
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
class Block_210957236661b64005867811_10685776 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_210957236661b64005867811_10685776',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Contenu générique<?php
}
}
/* {/block 'body'} */
}
