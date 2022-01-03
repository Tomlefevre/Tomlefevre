<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-11 22:32:45
  from 'C:\laragon\www\tps\TP4\templates\profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61b5270d5f0f62_70843458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2158cca78a506cc60c55219c40e95431a72e7a7b' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\TP4\\templates\\profil.tpl',
      1 => 1639261962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b5270d5f0f62_70843458 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3926260361b5270d5e0dd2_48580775', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_76686918961b5270d5e1792_89974826', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_3926260361b5270d5e0dd2_48580775 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_3926260361b5270d5e0dd2_48580775',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Profil<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_76686918961b5270d5e1792_89974826 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_76686918961b5270d5e1792_89974826',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id='main'>

    <h1>Profil</h1>

    <label><b>Nom</b></label><br />
    <input type="nom" placeholder="Nom" name="nom" value=<?php echo $_SESSION['user']['nom'];?>
><br />
    <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['nom'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span><br />

    <label><b>Email</b></label><br />
    <input type="email" placeholder="email" name="email" value=<?php echo $_smarty_tpl->tpl_vars['info']->value['email'];?>
><br />
    <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['email'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span><br />

    <label><b>Pays</b></label><br />
    <input type="pays" placeholder="pays" name="pays" value=<?php echo $_smarty_tpl->tpl_vars['info']->value['pays'];?>
><br />
    <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['pays'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span><br />

    <label><b>Ville</b></label><br />
    <input type="ville" placeholder="ville" name="ville" value=<?php echo $_smarty_tpl->tpl_vars['info']->value['ville'];?>
><br />
    <span><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['messages']->value['ville'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</span><br />


</div>
<?php
}
}
/* {/block 'body'} */
}
