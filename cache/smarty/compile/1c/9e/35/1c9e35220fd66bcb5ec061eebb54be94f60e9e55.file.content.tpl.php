<?php /* Smarty version Smarty-3.1.19, created on 2017-11-30 23:35:43
         compiled from "C:\wamp\www\mon_presta\modules\orderimport\views\templates\admin\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:302355a208387be2b11-05136051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c9e35220fd66bcb5ec061eebb54be94f60e9e55' => 
    array (
      0 => 'C:\\wamp\\www\\mon_presta\\modules\\orderimport\\views\\templates\\admin\\content.tpl',
      1 => 1512081337,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '302355a208387be2b11-05136051',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a208387c85006_82924230',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a208387c85006_82924230')) {function content_5a208387c85006_82924230($_smarty_tpl) {?><form method="post" action="reception.php" enctype="multipart/form-data">

    <label for="icone">Icône du fichier (JPG, PNG ou GIF | max. 15 Ko) :</label><br />

    <input type="file" name="icone" id="icone" /><br />

    <label for="mon_fichier">Fichier (tous formats | max. 1 Mo) :</label><br />

    <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />

    <input type="file" name="mon_fichier" id="mon_fichier" /><br />

    <label for="titre">Titre du fichier (max. 50 caractères) :</label><br />

    <input type="text" name="titre" value="Titre du fichier" id="titre" /><br />

    <label for="description">Description de votre fichier (max. 255 caractères) :</label><br />

    <textarea name="description" id="description"></textarea><br />

    <input type="submit" name="submit" value="Envoyer" />

</form><?php }} ?>
