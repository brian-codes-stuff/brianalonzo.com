<?php
/* Smarty version 3.1.31, created on 2018-09-08 08:29:16
  from "/home4/ad36f5ra/public_html/formtools/modules/swift_mailer/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b93ceac166e84_62117550',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '735d191ab02cc905616e216510cb73df1d15f2d4' => 
    array (
      0 => '/home4/ad36f5ra/public_html/formtools/modules/swift_mailer/templates/index.tpl',
      1 => 1534221023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./tab_settings.tpl' => 2,
    'file:./tab_test.tpl' => 1,
  ),
),false)) {
function content_5b93ceac166e84_62117550 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once '/home4/ad36f5ra/public_html/formtools/global/smarty_plugins/function.ft_include.php';
echo smarty_function_ft_include(array('file'=>'modules_header.tpl'),$_smarty_tpl);?>


<table cellpadding="0" cellspacing="0" class="margin_bottom_large">
    <tr>
        <td width="45"><a href="./"><img src="images/icon_swift_mailer.gif" border="0" width="34" height="34"/></a></td>
        <td class="title">
            <a href="../../admin/modules"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_modules'];?>
</a>
            <span class="joiner">&raquo;</span>
            <?php echo $_smarty_tpl->tpl_vars['L']->value['module_name'];?>

        </td>
    </tr>
</table>

<?php echo smarty_function_ft_include(array('file'=>'tabset_open.tpl'),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['page']->value == "settings") {?>
    <?php $_smarty_tpl->_subTemplateRender('file:./tab_settings.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php } elseif ($_smarty_tpl->tpl_vars['page']->value == "test") {?>
    <?php $_smarty_tpl->_subTemplateRender('file:./tab_test.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender('file:./tab_settings.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php }?>

<?php echo smarty_function_ft_include(array('file'=>'tabset_close.tpl'),$_smarty_tpl);?>


<?php echo smarty_function_ft_include(array('file'=>'modules_footer.tpl'),$_smarty_tpl);?>

<?php }
}
