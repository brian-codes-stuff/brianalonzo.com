<?php
/* Smarty version 3.1.31, created on 2018-08-21 17:12:58
  from "C:\Program Files\Ampps\www\theatlantacovenant.com\formtools\install\templates\step4.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b7c481acca0f2_74599751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c11de414e4eb7a1e7c41f662665e71db4ab0339c' => 
    array (
      0 => 'C:\\Program Files\\Ampps\\www\\theatlantacovenant.com\\formtools\\install\\templates\\step4.tpl',
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
function content_5b7c481acca0f2_74599751 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../../install/templates/install_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_create_config_file'];?>
</h2>

<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if ($_smarty_tpl->tpl_vars['config_file_generated']->value === '') {?>

	<div class="margin_bottom_large">
		<?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_install_create_config_file'];?>

	</div>

	<textarea name="content" class="config_file_contents" id="cfc" readonly><?php echo $_smarty_tpl->tpl_vars['config_file']->value;?>
</textarea>
    <?php echo '<script'; ?>
>
      new CodeMirror.fromTextArea(document.getElementById("cfc"), {
        mode: "php"
          });
    <?php echo '</script'; ?>
>

	<form name="display_config_content_form" action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
" method="post">
		<p>
			<input type="submit" name="generate_file" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_create_file'];?>
" />
		</p>
	</form>

<?php } elseif ($_smarty_tpl->tpl_vars['config_file_generated']->value === true) {?>

	<div class="margin_bottom_large notify">
		<?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_config_file_created'];?>

	</div>

	<form action="step5.php" method="post">
		<p>
			<input type="submit" name="next" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_continue_rightarrow'];?>
" />
		</p>
	</form>

<?php } elseif ($_smarty_tpl->tpl_vars['config_file_generated']->value === false) {?>

	<div class="margin_bottom_large notify">
		<?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_config_file_not_created'];?>

	</div>
	<p>
		<?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_config_file_not_created_instructions'];?>

	</p>

	<form name="display_config_content_form" action="<?php echo $_smarty_tpl->tpl_vars['same_page']->value;?>
" method="post">
		<textarea name="content" class="config_file_contents" id="cfc_not_generated"><?php echo $_smarty_tpl->tpl_vars['config_file']->value;?>
</textarea>
        <?php echo '<script'; ?>
>
        new CodeMirror.fromTextArea(document.getElementById("cfc_not_generated"), {
            mode: "php"
        });
        <?php echo '</script'; ?>
>
		<p>
			<input type="submit" name="check_config_contents" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_continue_rightarrow'];?>
" />
		</p>
	</form>

<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:../../install/templates/install_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
