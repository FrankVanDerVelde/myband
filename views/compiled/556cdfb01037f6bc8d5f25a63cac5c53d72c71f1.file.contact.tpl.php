<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 20:31:44
         compiled from "views\contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1109157fe34b5910770-35235026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '556cdfb01037f6bc8d5f25a63cac5c53d72c71f1' => 
    array (
      0 => 'views\\contact.tpl',
      1 => 1478201481,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1109157fe34b5910770-35235026',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57fe34b5930d91_08411355',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fe34b5930d91_08411355')) {function content_57fe34b5930d91_08411355($_smarty_tpl) {?>
<section>

<style>
input, select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: gray;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: black;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
	background-color: darkgrey;
	border: 2px solid black;
}
	
textarea {
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
}
	</style>



<h3 id="contactHead">Vul dit contact form in en wij reageren zo spoedig mogelijk.</h3>

<div>
  <form action="action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname">
	  
	  <label for="email">Email</label>
    <input type="email" id="email" name="Email">

	  <label for="cellphone">Celphone number</label>
    <input type="number" id="cellphone" name="cellphone">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="Nederland">Netherlands</option>
      <option value="Amerika">America</option>
      <option value="Duitsland">Germany</option>
		<option value="Belgie">Belgium</option>
		<option value="Frankrijk">France</option>
    </select>
	  
	  <label for="onderwerp">Onderwerp</label>
    <select id="onderwerp" name="onderwerp">
      <option value="League">I have a question about the game League of Legends.</option>
      <option value="Riot">I have a question about riot games.</option>
      <option value="Opmerking">I have a compliment or tip.</option>
		<option value="Overig">Other questions</option>
    </select>
  
    <input type="submit" value="Submit">
	 <textarea></textarea>
  </form>
</div>




</section><?php }} ?>
