<?php
/* Smarty version 3.1.31, created on 2018-09-08 08:29:16
  from "/home4/ad36f5ra/public_html/formtools/themes/default/modules_footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b93ceac255538_47351771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c4debccaa3f37f03d2cdcfd16bec7ef7906a794' => 
    array (
      0 => '/home4/ad36f5ra/public_html/formtools/themes/default/modules_footer.tpl',
      1 => 1534221019,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b93ceac255538_47351771 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_show_page_load_time')) require_once '/home4/ad36f5ra/public_html/formtools/global/smarty_plugins/function.show_page_load_time.php';
?>

    </td>
  </tr>
  </table>

</div>


<?php if ($_smarty_tpl->tpl_vars['footer_text']->value != '' || $_smarty_tpl->tpl_vars['g_enable_benchmarking']->value) {?>
  <div class="footer">
    <?php echo $_smarty_tpl->tpl_vars['footer_text']->value;?>

    <?php echo smarty_function_show_page_load_time(array(),$_smarty_tpl);?>

  </div>
<?php }?>

</body>
</html>
<?php }
}
