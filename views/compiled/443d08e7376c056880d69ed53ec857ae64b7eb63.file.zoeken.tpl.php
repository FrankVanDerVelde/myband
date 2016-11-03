<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 20:46:01
         compiled from "views\zoeken.tpl" */ ?>
<?php /*%%SmartyHeaderCode:216958189fcc816641-31825285%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '443d08e7376c056880d69ed53ec857ae64b7eb63' => 
    array (
      0 => 'views\\zoeken.tpl',
      1 => 1478202354,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '216958189fcc816641-31825285',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58189fcc840f41_83453808',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58189fcc840f41_83453808')) {function content_58189fcc840f41_83453808($_smarty_tpl) {?><section>
	<h1 class="pageTitle">Zoeken</h1>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","model/getuser.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>

<form id="zoekbalk">
 <input type="text" size="25" onkeyup="showUser(this.value)" placeholder="Type hier een champion naam.">
</form>
<div id="txtHint"></div>
	
	</section><?php }} ?>
