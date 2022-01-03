<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-15 16:14:45
  from '/Applications/MAMP/htdocs/TD4/templates/profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61ba14757f8e12_88366748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b26c372e51aab51cb53e10f3ad039368d305c0db' => 
    array (
      0 => '/Applications/MAMP/htdocs/TD4/templates/profil.tpl',
      1 => 1639333338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ba14757f8e12_88366748 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145473501861ba14757a1461_51113946', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19114892661ba14757a4900_24749714', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_145473501861ba14757a1461_51113946 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_145473501861ba14757a1461_51113946',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Profil<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_19114892661ba14757a4900_24749714 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_19114892661ba14757a4900_24749714',
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
