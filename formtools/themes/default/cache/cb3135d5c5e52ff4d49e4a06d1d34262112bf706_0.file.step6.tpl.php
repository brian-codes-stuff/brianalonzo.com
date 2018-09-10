<?php
/* Smarty version 3.1.31, created on 2018-08-21 17:22:22
  from "C:\Program Files\Ampps\www\theatlantacovenant.com\formtools\themes\default\admin\forms\add\step6.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b7c4a4e96f4e5_08180780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb3135d5c5e52ff4d49e4a06d1d34262112bf706' => 
    array (
      0 => 'C:\\Program Files\\Ampps\\www\\theatlantacovenant.com\\formtools\\themes\\default\\admin\\forms\\add\\step6.tpl',
      1 => 1534871450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7c4a4e96f4e5_08180780 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ft_include')) require_once 'C:\\Program Files\\Ampps\\www\\theatlantacovenant.com\\formtools\\global\\smarty_plugins\\function.ft_include.php';
echo smarty_function_ft_include(array('file'=>'header.tpl'),$_smarty_tpl);?>


  <table cellpadding="0" cellspacing="0" class="margin_bottom_large">
  <tr>
    <td width="45"><a href="../"><img src="<?php echo $_smarty_tpl->tpl_vars['images_url']->value;?>
/icon_forms.gif" border="0" width="34" height="34" /></a></td>
    <td class="title">
      <a href="../"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_forms'];?>
</a> <span class="joiner">&raquo;</span>
      <a href="./"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_add_form'];?>
</a> <span class="joiner">&raquo;</span>
      <?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_external_form'];?>

    </td>
  </tr>
  </table>

  <table cellpadding="0" cellspacing="0" width="100%" class="add_form_nav">
  <tr>
    <td class="selected"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_start'];?>
</td>
    <td class="selected"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_form_info'];?>
</td>
    <td class="selected"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_test_submission'];?>
</td>
    <td class="selected"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_database_setup'];?>
</td>
    <td class="selected"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_field_types'];?>
</td>
    <td class="selected"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_finalize_form'];?>
</td>
  </tr>
  </table>

  <br />
  <div>
    <div class="subtitle underline"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['LANG']->value['phrase_final_touches_page_6'], 'UTF-8');?>
</div>
    <p>
      <?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_add_form_step_5_para_1'];?>

    </p>

    <code id="highlight-code1" class="highlight-code"></code>

    <?php echo '<script'; ?>
>
    new CodeMirror($("#highlight-code1")[0], {
      mode: "xml",
      readOnly: "nocursor",
      value: '<input type="hidden" name="form_tools_initialize_form" value="1" />'
    });
    <?php echo '</script'; ?>
>

    <p>
      <?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_add_form_step_5_para_5'];?>

    </p>

      <code id="highlight-code2" class="highlight-code"></code>

      <?php echo '<script'; ?>
>
        new CodeMirror($("#highlight-code2")[0], {
          mode: "text/x-php",
          readOnly: "nocursor",
          value: '$fields = $api->initFormPage(<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
);'
        });
      <?php echo '</script'; ?>
>

    <p>
      <?php echo $_smarty_tpl->tpl_vars['LANG']->value['text_add_form_step_5_para_2'];?>

    </p>
    <p>
      <?php echo $_smarty_tpl->tpl_vars['text_add_form_step_5_para']->value;?>

    </p>
    <?php if ($_smarty_tpl->tpl_vars['uploading_files']->value == "yes") {?>
      <p>
        <?php echo $_smarty_tpl->tpl_vars['text_add_form_step_5_para_4']->value;?>

      </p>
    <?php }?>

  </div>

  <form method="post" action="../">
    <input type="submit" name="action" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_form_list'];?>
" />
  </form>

<?php echo smarty_function_ft_include(array('file'=>'footer.tpl'),$_smarty_tpl);?>

<?php }
}
