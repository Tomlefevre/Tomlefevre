<?php
/* Smarty version 3.1.34-dev-7, created on 2021-11-23 13:17:53
  from 'C:\laragon\www\tps\TP4\templates\success.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_619cea01cee238_67836162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '078656677e5740e5aebbbec286d1b86a8a83cfc4' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\TP4\\templates\\success.tpl',
      1 => 1637673168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619cea01cee238_67836162 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1501825931619cea01ce9d04_76788342', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_701889645619cea01cec5f8_21784869', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_1501825931619cea01ce9d04_76788342 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1501825931619cea01ce9d04_76788342',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Succès!<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_701889645619cea01cec5f8_21784869 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_701889645619cea01cec5f8_21784869',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id='main'>
Bien enregistré, vous pouvez vous rendre sur la page de <a href='login'>connexion</a>
</div>
<?php
}
}
/* {/block 'body'} */
}
