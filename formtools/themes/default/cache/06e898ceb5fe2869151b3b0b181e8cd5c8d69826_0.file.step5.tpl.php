<?php
/* Smarty version 3.1.31, created on 2018-08-21 17:13:08
  from "C:\Program Files\Ampps\www\theatlantacovenant.com\formtools\install\templates\step5.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b7c482477aa42_82187376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06e898ceb5fe2869151b3b0b181e8cd5c8d69826' => 
    array (
      0 => 'C:\\Program Files\\Ampps\\www\\theatlantacovenant.com\\formtools\\install\\templates\\step5.tpl',
      1 => 1534871410,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../install/templates/install_header.tpl' => 1,
    'file:messages.tpl' => 1,
    'file:../../install/templates/install_footer.tpl' => 1,
  ),
),false)) {
function content_5b7c482477aa42_82187376 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../install/templates/install_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_create_admin_account'];?>
</h2>

<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if (!$_smarty_tpl->tpl_vars['account_created']->value) {?>

	<form name="create_account_form" action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
" method="post" onsubmit="return rsv.validate(this, rules)">
		<div class="margin_bottom_large">
			<?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_create_admin_account'];?>

		</div>

		<table cellpadding="0">
			<tr>
				<td width="160"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_first_name'];?>
</td>
				<td class="answer"><input type="text" name="first_name" value="" style="width:200px" /></td>
			</tr>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_last_name'];?>
</td>
				<td class="answer"><input type="text" name="last_name" value="" style="width:200px" /></td>
			</tr>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_email'];?>
</td>
				<td class="answer"><input type="text" name="email" value="" style="width:200px" /></td>
			</tr>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_login_username'];?>
</td>
				<td class="answer"><input type="text" name="username" value="" style="width:140px" /></td>
			</tr>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_login_password'];?>
</td>
				<td class="answer"><input type="password" name="password" value="" style="width:140px" /></td>
			</tr>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_re_enter_password'];?>
</td>
				<td class="answer"><input type="password" name="password_2" value="" style="width:140px" /></td>
			</tr>
		</table>

		<p>
			<input type="submit" name="add_account" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_create_account'];?>
" />
		</p>

	</form>

	<?php echo '<script'; ?>
>
		document.create_account_form.first_name.focus();
	<?php echo '</script'; ?>
>

<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:../../install/templates/install_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
