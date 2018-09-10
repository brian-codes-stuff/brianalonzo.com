<?php
/* Smarty version 3.1.31, created on 2018-09-07 15:13:47
  from "/home4/ad36f5ra/public_html/formtools/themes/default/footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b92dbfbc193d5_48749945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa79c942154a88b39c8fee71752f64483390b289' => 
    array (
      0 => '/home4/ad36f5ra/public_html/formtools/themes/default/footer.tpl',
      1 => 1534221019,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b92dbfbc193d5_48749945 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_show_page_load_time')) require_once '/home4/ad36f5ra/public_html/formtools/global/smarty_plugins/function.show_page_load_time.php';
?>

      </div>
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
