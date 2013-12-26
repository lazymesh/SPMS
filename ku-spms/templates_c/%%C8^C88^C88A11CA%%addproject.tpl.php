<?php /* Smarty version 2.6.19, created on 2011-10-17 07:57:34
         compiled from addproject.tpl */ ?>
<div class="block_in_wrapper">
<h2><?php echo $this->_config[0]['vars']['addproject']; ?>
</h2>

	<form class="main" method="post" action="admin.php?action=addpro" <?php echo 'onsubmit="return validateCompleteForm(this);"'; ?>
 >
	<fieldset>
		<div class="row"><label for="name"><?php echo $this->_config[0]['vars']['name']; ?>
:</label><input type="text" class="text" name="name" id="name" required="1" realname="<?php echo $this->_config[0]['vars']['name']; ?>
" /></div>
		<div class="row"><label for="desc"><?php echo $this->_config[0]['vars']['description']; ?>
:</label><div class="editor"><textarea name="desc" id="desc"  rows="3" cols="1" ></textarea></div></div>

	    <div class="clear_both_b"></div>

		<div class="row">
		<label for="end"><?php echo $this->_config[0]['vars']['due']; ?>
:</label>
		<input type="text" class="text" name="end"  id="end"  realname="<?php echo $this->_config[0]['vars']['due']; ?>
" regexp="<?php echo '\\d{2}.\\d{2}.\\d{4}'; ?>
" />
		<br /><br />
		<label for = "neverdue"></label><input type = "checkbox" class = "checkbox" value = "neverdue" name = "neverdue" id = "neverdue" onclick = "$('end').value='';$('end').disabled='disabled';"><?php echo $this->_config[0]['vars']['neverdue']; ?>

		</div>

		<div class="datepick">
			<div id = "datepicker_project" class="picker" style = "display:none;"></div>
		</div>

		<script type="text/javascript">
		theCal<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
 = new calendar(<?php echo $this->_tpl_vars['theM']; ?>
,<?php echo $this->_tpl_vars['theY']; ?>
);
		theCal<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
.dayNames = ["<?php echo $this->_config[0]['vars']['monday']; ?>
","<?php echo $this->_config[0]['vars']['tuesday']; ?>
","<?php echo $this->_config[0]['vars']['wednesday']; ?>
","<?php echo $this->_config[0]['vars']['thursday']; ?>
","<?php echo $this->_config[0]['vars']['friday']; ?>
","<?php echo $this->_config[0]['vars']['saturday']; ?>
","<?php echo $this->_config[0]['vars']['sunday']; ?>
"];
		theCal<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
.monthNames = ["<?php echo $this->_config[0]['vars']['january']; ?>
","<?php echo $this->_config[0]['vars']['february']; ?>
","<?php echo $this->_config[0]['vars']['march']; ?>
","<?php echo $this->_config[0]['vars']['april']; ?>
","<?php echo $this->_config[0]['vars']['may']; ?>
","<?php echo $this->_config[0]['vars']['june']; ?>
","<?php echo $this->_config[0]['vars']['july']; ?>
","<?php echo $this->_config[0]['vars']['august']; ?>
","<?php echo $this->_config[0]['vars']['september']; ?>
","<?php echo $this->_config[0]['vars']['october']; ?>
","<?php echo $this->_config[0]['vars']['november']; ?>
","<?php echo $this->_config[0]['vars']['december']; ?>
"];
		theCal<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
.relateTo = "end";
		theCal<?php echo $this->_tpl_vars['lists'][$this->_sections['list']['index']]['ID']; ?>
.getDatepicker("datepicker_project");
	</script>

		<div class = "row">
		<label for = "budget"><?php echo $this->_config[0]['vars']['budget']; ?>
:</label>
		<input type = "text" class="text" name = "budget" id = "budget" />
		</div>

		<div class="row">
        <label><?php echo $this->_config[0]['vars']['members']; ?>
:</label>
		<div style="float:left;">
        <?php unset($this->_sections['users']);
$this->_sections['users']['name'] = 'users';
$this->_sections['users']['loop'] = is_array($_loop=$this->_tpl_vars['users']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['users']['show'] = true;
$this->_sections['users']['max'] = $this->_sections['users']['loop'];
$this->_sections['users']['step'] = 1;
$this->_sections['users']['start'] = $this->_sections['users']['step'] > 0 ? 0 : $this->_sections['users']['loop']-1;
if ($this->_sections['users']['show']) {
    $this->_sections['users']['total'] = $this->_sections['users']['loop'];
    if ($this->_sections['users']['total'] == 0)
        $this->_sections['users']['show'] = false;
} else
    $this->_sections['users']['total'] = 0;
if ($this->_sections['users']['show']):

            for ($this->_sections['users']['index'] = $this->_sections['users']['start'], $this->_sections['users']['iteration'] = 1;
                 $this->_sections['users']['iteration'] <= $this->_sections['users']['total'];
                 $this->_sections['users']['index'] += $this->_sections['users']['step'], $this->_sections['users']['iteration']++):
$this->_sections['users']['rownum'] = $this->_sections['users']['iteration'];
$this->_sections['users']['index_prev'] = $this->_sections['users']['index'] - $this->_sections['users']['step'];
$this->_sections['users']['index_next'] = $this->_sections['users']['index'] + $this->_sections['users']['step'];
$this->_sections['users']['first']      = ($this->_sections['users']['iteration'] == 1);
$this->_sections['users']['last']       = ($this->_sections['users']['iteration'] == $this->_sections['users']['total']);
?>
            <?php if ($this->_tpl_vars['users'][$this->_sections['users']['index']]['role'] == 2 && $this->_tpl_vars['users'][$this->_sections['users']['index']]['ID'] == $this->_tpl_vars['userid']): ?>
                <?php unset($this->_sections['user']);
$this->_sections['user']['name'] = 'user';
$this->_sections['user']['loop'] = is_array($_loop=$this->_tpl_vars['users']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['user']['show'] = true;
$this->_sections['user']['max'] = $this->_sections['user']['loop'];
$this->_sections['user']['step'] = 1;
$this->_sections['user']['start'] = $this->_sections['user']['step'] > 0 ? 0 : $this->_sections['user']['loop']-1;
if ($this->_sections['user']['show']) {
    $this->_sections['user']['total'] = $this->_sections['user']['loop'];
    if ($this->_sections['user']['total'] == 0)
        $this->_sections['user']['show'] = false;
} else
    $this->_sections['user']['total'] = 0;
if ($this->_sections['user']['show']):

            for ($this->_sections['user']['index'] = $this->_sections['user']['start'], $this->_sections['user']['iteration'] = 1;
                 $this->_sections['user']['iteration'] <= $this->_sections['user']['total'];
                 $this->_sections['user']['index'] += $this->_sections['user']['step'], $this->_sections['user']['iteration']++):
$this->_sections['user']['rownum'] = $this->_sections['user']['iteration'];
$this->_sections['user']['index_prev'] = $this->_sections['user']['index'] - $this->_sections['user']['step'];
$this->_sections['user']['index_next'] = $this->_sections['user']['index'] + $this->_sections['user']['step'];
$this->_sections['user']['first']      = ($this->_sections['user']['iteration'] == 1);
$this->_sections['user']['last']       = ($this->_sections['user']['iteration'] == $this->_sections['user']['total']);
?>
                    <div class="row">
                    <?php if ($this->_tpl_vars['users'][$this->_sections['user']['index']]['ID'] == $this->_tpl_vars['userid']): ?>
                    <input type="checkbox" class="checkbox" value="<?php echo $this->_tpl_vars['users'][$this->_sections['user']['index']]['ID']; ?>
" name="assignto[]" id="<?php echo $this->_tpl_vars['users'][$this->_sections['user']['index']]['ID']; ?>
" checked="checked"/><label for="<?php echo $this->_tpl_vars['users'][$this->_sections['user']['index']]['ID']; ?>
"><?php echo $this->_tpl_vars['users'][$this->_sections['user']['index']]['name']; ?>
</label><br />
                    <?php elseif ($this->_tpl_vars['users'][$this->_sections['user']['index']]['role'] == 3): ?>
                    <input type="radio" class="checkbox" value="<?php echo $this->_tpl_vars['users'][$this->_sections['user']['index']]['ID']; ?>
" name="assignto[]" id="<?php echo $this->_tpl_vars['users'][$this->_sections['user']['index']]['ID']; ?>
"/><label for="<?php echo $this->_tpl_vars['users'][$this->_sections['user']['index']]['ID']; ?>
"><?php echo $this->_tpl_vars['users'][$this->_sections['user']['index']]['name']; ?>
</label><br />
                    <?php endif; ?>
                    </div>
                <?php endfor; endif; ?>
           <?php elseif ($this->_tpl_vars['users'][$this->_sections['users']['index']]['role'] == 3 && $this->_tpl_vars['users'][$this->_sections['users']['index']]['ID'] == $this->_tpl_vars['userid']): ?>
                <?php unset($this->_sections['user']);
$this->_sections['user']['name'] = 'user';
$this->_sections['user']['loop'] = is_array($_loop=$this->_tpl_vars['users']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['user']['show'] = true;
$this->_sections['user']['max'] = $this->_sections['user']['loop'];
$this->_sections['user']['step'] = 1;
$this->_sections['user']['start'] = $this->_sections['user']['step'] > 0 ? 0 : $this->_sections['user']['loop']-1;
if ($this->_sections['user']['show']) {
    $this->_sections['user']['total'] = $this->_sections['user']['loop'];
    if ($this->_sections['user']['total'] == 0)
        $this->_sections['user']['show'] = false;
} else
    $this->_sections['user']['total'] = 0;
if ($this->_sections['user']['show']):

            for ($this->_sections['user']['index'] = $this->_sections['user']['start'], $this->_sections['user']['iteration'] = 1;
                 $this->_sections['user']['iteration'] <= $this->_sections['user']['total'];
                 $this->_sections['user']['index'] += $this->_sections['user']['step'], $this->_sections['user']['iteration']++):
$this->_sections['user']['rownum'] = $this->_sections['user']['iteration'];
$this->_sections['user']['index_prev'] = $this->_sections['user']['index'] - $this->_sections['user']['step'];
$this->_sections['user']['index_next'] = $this->_sections['user']['index'] + $this->_sections['user']['step'];
$this->_sections['user']['first']      = ($this->_sections['user']['iteration'] == 1);
$this->_sections['user']['last']       = ($this->_sections['user']['iteration'] == $this->_sections['user']['total']);
?>
                    <div class="row">
                    <?php if ($this->_tpl_vars['users'][$this->_sections['user']['index']]['ID'] == $this->_tpl_vars['userid']): ?>
                    <input type="checkbox" class="checkbox" value="<?php echo $this->_tpl_vars['users'][$this->_sections['user']['index']]['ID']; ?>
" name="assignto[]" id="<?php echo $this->_tpl_vars['users'][$this->_sections['user']['index']]['ID']; ?>
" checked="checked"/><label for="<?php echo $this->_tpl_vars['users'][$this->_sections['user']['index']]['ID']; ?>
"><?php echo $this->_tpl_vars['users'][$this->_sections['user']['index']]['name']; ?>
</label><br />
                    <?php elseif ($this->_tpl_vars['users'][$this->_sections['user']['index']]['role'] == 2): ?>
                    <input type="radio" class="checkbox" value="<?php echo $this->_tpl_vars['users'][$this->_sections['user']['index']]['ID']; ?>
" name="assignto[]" id="<?php echo $this->_tpl_vars['users'][$this->_sections['user']['index']]['ID']; ?>
"/><label for="<?php echo $this->_tpl_vars['users'][$this->_sections['user']['index']]['ID']; ?>
"><?php echo $this->_tpl_vars['users'][$this->_sections['user']['index']]['name']; ?>
</label><br />
                    <?php endif; ?>
                    </div>
                <?php endfor; endif; ?>
            <?php endif; ?>
        <?php endfor; endif; ?>
	    </div>
        
		</div>

		<input type="hidden" name="assignme" value="1" />

	    <div class="clear_both_b"></div>

		<div class="row-butn-bottom">
		<label>&nbsp;</label>
		<button type="submit" onfocus="this.blur();"><?php echo $this->_config[0]['vars']['addbutton']; ?>
</button>
		<?php if ($this->_tpl_vars['myprojects'] == '1'): ?>
		<button type = "reset" onclick="blindtoggle('form_addmyproject');toggleClass('add_myprojects','add-active','add');toggleClass('add_butn_myprojects','butn_link_active','butn_link');toggleClass('sm_myprojects','smooth','nosmooth');return false;" onfocus="this.blur();"><?php echo $this->_config[0]['vars']['cancel']; ?>
</button>
		<?php else: ?>
		<button type = "reset" onclick="blindtoggle('form_<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
');return false;"><?php echo $this->_config[0]['vars']['cancel']; ?>
</button>
		<?php endif; ?>
		</div>


	</fieldset>
	</form>

</div> 