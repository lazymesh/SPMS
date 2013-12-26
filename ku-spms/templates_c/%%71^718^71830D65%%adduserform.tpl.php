<?php /* Smarty version 2.6.19, created on 1980-01-04 00:04:49
         compiled from adduserform.tpl */ ?>
<div class="block_in_wrapper">
	<form class="main" method="post" action="admin.php?action=adduser" <?php echo 'onsubmit="return validateCompleteForm(this);"'; ?>
>
		<fieldset>

			<div class="row">
				<label for="name">Full name:</label>
				<input type="text" name="name" id="name" required="1" realname="<?php echo $this->_config[0]['vars']['name']; ?>
" />
			</div>
			<div class="row">
				<label for="company">Faculty:</label>
				<input type="text" name="company" id="company" realname="<?php echo $this->_config[0]['vars']['company']; ?>
" />
			</div>
			<div class="row">
				<label for="email"><?php echo $this->_config[0]['vars']['email']; ?>
:</label>
				<input type="text" name="email" id="email" realname="<?php echo $this->_config[0]['vars']['email']; ?>
" />
			</div>
			<div class="row">
				<label for="pass"><?php echo $this->_config[0]['vars']['password']; ?>
:</label>
				<input type="password" name="pass" id="pass" required="1" realname="<?php echo $this->_config[0]['vars']['password']; ?>
" />
			</div>
			<div class = "row">
				<label id = "gender">Gender:</label>
				<select name = "gender" id = "gender" realname = "<?php echo $this->_config[0]['vars']['gender']; ?>
" />
							<?php if ($this->_tpl_vars['user']['gender'] == ""): ?>
							<option value = "" selected><?php echo $this->_config[0]['vars']['chooseone']; ?>
</option>
							<?php endif; ?>
							<option <?php if ($this->_tpl_vars['user']['gender'] == 'm'): ?>selected="selected"<?php endif; ?> value = "m"><?php echo $this->_config[0]['vars']['male']; ?>
</option>
							<option <?php if ($this->_tpl_vars['user']['gender'] == 'f'): ?>selected="selected"<?php endif; ?> value = "f"><?php echo $this->_config[0]['vars']['female']; ?>
</option>
						</select>
			</div>
            <div class = "row">
				<label id = "address1">Address:</label>
				<input type = "text" name = "address1" id = "address1" />
			</div>
            <div class = "row">
				<label id = "address2">Address2:</label>
				<input type = "text" name = "address2" id = "address2" />
			</div>
            <div class = "row">
				<label id = "country">Country:</label>
				<input type = "text" name = "country" id = "country" />
			</div>
            <div class = "row">
				<label id = "tel1">Phone number:</label>
				<input type = "text" name = "tel1" id = "tel1" />
			</div>
            			
			<div class="row">
				<label><?php echo $this->_config[0]['vars']['role']; ?>
:</label>
				<select name = "role" realname = "<?php echo $this->_config[0]['vars']['role']; ?>
" required="1" exclude = "-1" id = "roleselect">
					<option value="-1" selected="selected"><?php echo $this->_config[0]['vars']['chooseone']; ?>
</option>
					<?php unset($this->_sections['role']);
$this->_sections['role']['name'] = 'role';
$this->_sections['role']['loop'] = is_array($_loop=$this->_tpl_vars['roles']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['role']['show'] = true;
$this->_sections['role']['max'] = $this->_sections['role']['loop'];
$this->_sections['role']['step'] = 1;
$this->_sections['role']['start'] = $this->_sections['role']['step'] > 0 ? 0 : $this->_sections['role']['loop']-1;
if ($this->_sections['role']['show']) {
    $this->_sections['role']['total'] = $this->_sections['role']['loop'];
    if ($this->_sections['role']['total'] == 0)
        $this->_sections['role']['show'] = false;
} else
    $this->_sections['role']['total'] = 0;
if ($this->_sections['role']['show']):

            for ($this->_sections['role']['index'] = $this->_sections['role']['start'], $this->_sections['role']['iteration'] = 1;
                 $this->_sections['role']['iteration'] <= $this->_sections['role']['total'];
                 $this->_sections['role']['index'] += $this->_sections['role']['step'], $this->_sections['role']['iteration']++):
$this->_sections['role']['rownum'] = $this->_sections['role']['iteration'];
$this->_sections['role']['index_prev'] = $this->_sections['role']['index'] - $this->_sections['role']['step'];
$this->_sections['role']['index_next'] = $this->_sections['role']['index'] + $this->_sections['role']['step'];
$this->_sections['role']['first']      = ($this->_sections['role']['iteration'] == 1);
$this->_sections['role']['last']       = ($this->_sections['role']['iteration'] == $this->_sections['role']['total']);
?>
						<option value = "<?php echo $this->_tpl_vars['roles'][$this->_sections['role']['index']]['ID']; ?>
" id="role<?php echo $this->_tpl_vars['roles'][$this->_sections['role']['index']]['ID']; ?>
"><?php echo $this->_tpl_vars['roles'][$this->_sections['role']['index']]['name']; ?>
</option>
					<?php endfor; endif; ?>
				</select>
			</div>
			
			<div class="clear_both_b"></div>
			
			<div class="row">
				<label>&nbsp;</label>
				<div class="butn">
					<button type="submit"><?php echo $this->_config[0]['vars']['addbutton']; ?>
</button>
				</div>
				<a href = "javascript:blindtoggle('form_member');" class="butn_link"><span><?php echo $this->_config[0]['vars']['cancel']; ?>
</span></a>
			</div>

		</fieldset>
	</form>
</div> 