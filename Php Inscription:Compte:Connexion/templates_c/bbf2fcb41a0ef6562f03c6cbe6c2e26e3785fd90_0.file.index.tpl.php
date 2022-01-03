<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-13 11:53:03
  from '/Applications/MAMP/htdocs/FINI _D4/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61b7341f3cad32_46217814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbf2fcb41a0ef6562f03c6cbe6c2e26e3785fd90' => 
    array (
      0 => '/Applications/MAMP/htdocs/FINI _D4/templates/index.tpl',
      1 => 1639396331,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b7341f3cad32_46217814 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45337221461b7341f38ec17_98354849', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202087591061b7341f39fd12_97037176', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_45337221461b7341f38ec17_98354849 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_45337221461b7341f38ec17_98354849',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Accueil<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_202087591061b7341f39fd12_97037176 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_202087591061b7341f39fd12_97037176',
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
