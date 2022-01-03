<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-11 22:20:20
  from 'C:\laragon\www\tps\TP4\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61b52424574f05_87641222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '234468e3145562f1277a01b1833fcfe02392f1b1' => 
    array (
      0 => 'C:\\laragon\\www\\tps\\TP4\\templates\\index.tpl',
      1 => 1639254133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b52424574f05_87641222 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193250882861b5242456ca48_56472198', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30972395961b5242456d450_86139968', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'title'} */
class Block_193250882861b5242456ca48_56472198 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_193250882861b5242456ca48_56472198',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Accueil<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_30972395961b5242456d450_86139968 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_30972395961b5242456d450_86139968',
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
