<?php /* Smarty version Smarty-3.1.19, created on 2017-11-30 23:06:11
         compiled from "C:\wamp\www\mon_presta\admin\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:311275a2080d3190721-04238033%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '902513f48d819738a413f0f75a5dbd05ea1f58a5' => 
    array (
      0 => 'C:\\wamp\\www\\mon_presta\\admin\\themes\\default\\template\\content.tpl',
      1 => 1504515462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '311275a2080d3190721-04238033',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a2080d3263b49_06756463',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2080d3263b49_06756463')) {function content_5a2080d3263b49_06756463($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
