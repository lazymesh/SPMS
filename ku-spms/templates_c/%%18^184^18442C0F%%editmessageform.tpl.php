<?php /* Smarty version 2.6.19, created on 1980-01-04 00:13:57
         compiled from editmessageform.tpl */ ?>
<?php if ($this->_tpl_vars['showhtml'] != 'no'): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('jsload' => 'ajax','jsload1' => 'tinymce')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "tabsmenue-project.tpl", 'smarty_include_vars' => array('msgstab' => 'active')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="content-left">
<div id="content-left-in">
<div class="msgs">

<div class="breadcrumb">
<a href="managemessage.php?action=showproject&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
" title="<?php echo $this->_tpl_vars['project']['name']; ?>
"><img src="./templates/standard/images/symbols/projects.png" alt="" /><?php echo $this->_tpl_vars['message']['pname']; ?>
</a>
<a href="managemessage.php?action=showmessage&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
&mid=<?php echo $this->_tpl_vars['message']['ID']; ?>
"><img src="./templates/standard/images/symbols/msgs.png" alt="" /><?php echo $this->_config[0]['vars']['message']; ?>
</a>
</div>

<h1 class="second"><img src="./templates/standard/images/symbols/msgs.png" alt="" /><?php echo $this->_tpl_vars['message']['name']; ?>
</h1>

<?php endif; ?>


				<div class="block_in_wrapper">
				
				<h2><?php echo $this->_config[0]['vars']['editmessage']; ?>
</h2>

					<form class="main" method="post" action="managemessage.php?action=edit&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
" <?php echo 'onsubmit="return validateCompleteForm(this);"'; ?>
>
					<fieldset>
						<div class="row">
							<label for="title"><?php echo $this->_config[0]['vars']['title']; ?>
:</label><input type="text" value="<?php echo $this->_tpl_vars['message']['title']; ?>
" name="title" id="title" required="1" realname="<?php echo $this->_config[0]['vars']['title']; ?>
"/>
						</div>
						
						<div class = "row">
								<label for="text"><?php echo $this->_config[0]['vars']['text']; ?>
:</label>
								<div class="editor"><textarea name="text" id="text"  realname="<?php echo $this->_config[0]['vars']['text']; ?>
" rows="3" cols="1" ><?php echo $this->_tpl_vars['message']['text']; ?>
</textarea>
								</div>
						</div>
						<!--
						<div class="row">
							<label for="tags"><?php echo $this->_config[0]['vars']['tags']; ?>
:</label><input type="text" value="<?php echo $this->_tpl_vars['message']['tags']; ?>
" name="tags" id="tags"  realname="<?php echo $this->_config[0]['vars']['tags']; ?>
"/>
						</div>
						-->
						<input type="hidden" name="mid" value="<?php echo $this->_tpl_vars['message']['ID']; ?>
" />

						<div class="row-butn-bottom">
							<label>&nbsp;</label>
							<button type="submit" onfocus="this.blur();"><?php echo $this->_config[0]['vars']['send']; ?>
</button>
							 <?php if ($this->_tpl_vars['showhtml'] == 'no'): ?>
							<button onclick="blindtoggle('form_edit');toggleClass('edit_butn','edit-active','edit');toggleClass('sm_replies_a','smooth','nosmooth');return false;" onfocus="this.blur();"><?php echo $this->_config[0]['vars']['cancel']; ?>
</button>
							<?php endif; ?>
						</div>

					</fieldset>
					</form>

				</div> 				
				

<?php if ($this->_tpl_vars['showhtml'] != 'no'): ?>
<div class="content-spacer"></div>
</div> </div> </div> 
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "sidebar-a.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>