<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-15 15:56:23
  from '/Applications/MAMP/htdocs/TD4/templates/success.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61ba1027b21d12_98967955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f77e5d59829307981b212257959159bc6d07c242' => 
    array (
      0 => '/Applications/MAMP/htdocs/TD4/templates/success.tpl',
      1 => 1639396603,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ba1027b21d12_98967955 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163681913561ba1027b1dbe3_93853616', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199603342061ba1027b20465_81359348', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_163681913561ba1027b1dbe3_93853616 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_163681913561ba1027b1dbe3_93853616',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Succès!<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_199603342061ba1027b20465_81359348 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_199603342061ba1027b20465_81359348',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id='main'>
    <p>Bien enregistré, vous pouvez vous rendre sur la page de <a href='login'>connexion</a></p>
</div>
<?php
}
}
/* {/block 'body'} */
}
