<?php /* Smarty version 2.6.19, created on 2011-10-17 08:08:40
         compiled from mygrades.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'mygrades.tpl', 66, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('jsload' => 'ajax','jsload1' => 'tinymce','jsload3' => 'lightbox')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "tabsmenue-desk.tpl", 'smarty_include_vars' => array('grdstab' => 'active')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="content-left">
	<div id="content-left-in">
		<div class="grds">
			
            <h1>My grades</h1>

			<div class="headline">
				<a href="javascript:void(0);" id="acc-projects_toggle" class="win_none" onclick = "toggleBlock('acc-projects');"></a>

				<?php if ($this->_tpl_vars['userpermissions']['grades']['add']): ?>
					<div class="wintools">
						<a class="add" href="javascript:blindtoggle('form_addmyproject');" id="add_myprojects" onclick="toggleClass(this,'add-active','add');toggleClass('add_butn_myprojects','butn_link_active','butn_link');toggleClass('sm_myprojects','smooth','nosmooth');"><span>Add grades</span></a>
					</div>
                    <?php endif; ?>

				<h2>
					<a  title="My grades"><img src="./templates/standard/images/symbols/grades.jpg" alt=""/>My grades</a>
				</h2>
			</div>

			<div class="block" id="acc-projects">

								<div id = "form_addmygrade" class="addmenue" style = "display:none;">
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "addgrade.tpl", 'smarty_include_vars' => array('mygrades' => '1')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</div>

			<div class="nosmooth" id="sm_myprojects">
				<table cellpadding="0" cellspacing="0" border="0" id="acc-oldprojects">

						<thead>
							<tr>
								<th class="a"></th>
								<th class="b">Closed projects</th>
								<th class="ce" style="text-align:left">Grades&nbsp;&nbsp;</th>
								<th class="de">Supervisor</th>
								<th class="e">Date</th>
								<th class="tools"></th>
							</tr>
						</thead>

						<tfoot>
							<tr>
								<td colspan="6"></td>
							</tr>
						</tfoot>

                    <?php unset($this->_sections['clopro']);
$this->_sections['clopro']['name'] = 'clopro';
$this->_sections['clopro']['loop'] = is_array($_loop=$this->_tpl_vars['oldprojects']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['clopro']['show'] = true;
$this->_sections['clopro']['max'] = $this->_sections['clopro']['loop'];
$this->_sections['clopro']['step'] = 1;
$this->_sections['clopro']['start'] = $this->_sections['clopro']['step'] > 0 ? 0 : $this->_sections['clopro']['loop']-1;
if ($this->_sections['clopro']['show']) {
    $this->_sections['clopro']['total'] = $this->_sections['clopro']['loop'];
    if ($this->_sections['clopro']['total'] == 0)
        $this->_sections['clopro']['show'] = false;
} else
    $this->_sections['clopro']['total'] = 0;
if ($this->_sections['clopro']['show']):

            for ($this->_sections['clopro']['index'] = $this->_sections['clopro']['start'], $this->_sections['clopro']['iteration'] = 1;
                 $this->_sections['clopro']['iteration'] <= $this->_sections['clopro']['total'];
                 $this->_sections['clopro']['index'] += $this->_sections['clopro']['step'], $this->_sections['clopro']['iteration']++):
$this->_sections['clopro']['rownum'] = $this->_sections['clopro']['iteration'];
$this->_sections['clopro']['index_prev'] = $this->_sections['clopro']['index'] - $this->_sections['clopro']['step'];
$this->_sections['clopro']['index_next'] = $this->_sections['clopro']['index'] + $this->_sections['clopro']['step'];
$this->_sections['clopro']['first']      = ($this->_sections['clopro']['iteration'] == 1);
$this->_sections['clopro']['last']       = ($this->_sections['clopro']['iteration'] == $this->_sections['clopro']['total']);
?>

										<?php if ($this->_sections['clopro']['index'] % 2 == 0): ?>
					<tbody class="color-a" id="proj_<?php echo $this->_tpl_vars['oldprojects'][$this->_sections['clopro']['index']]['ID']; ?>
">
					<?php else: ?>
					<tbody class="color-b" id="proj_<?php echo $this->_tpl_vars['oldprojects'][$this->_sections['clopro']['index']]['ID']; ?>
">
					<?php endif; ?>
						<tr>
							<td class="a"><?php if ($this->_tpl_vars['userpermissions']['projects']['close']): ?><a class="butn_checked" href="manageproject.php?action=open&amp;id=<?php echo $this->_tpl_vars['oldprojects'][$this->_sections['clopro']['index']]['ID']; ?>
" title="<?php echo $this->_config[0]['vars']['open']; ?>
"></a><?php endif; ?></td>
							<td class="b">
								<div class="toggle-in">
								<span class="acc-toggle" onclick="javascript:accord_oldprojects.activate($$('#acc-oldprojects .accordion_toggle')[<?php echo $this->_sections['clopro']['index']; ?>
]);toggleAccordeon('acc-oldprojects',this);"></span>
									<a href="manageproject.php?action=showproject&amp;id=<?php echo $this->_tpl_vars['oldprojects'][$this->_sections['clopro']['index']]['ID']; ?>
" title="<?php echo $this->_tpl_vars['oldprojects'][$this->_sections['clopro']['index']]['name']; ?>
">
										<?php if ($this->_tpl_vars['oldprojects'][$this->_sections['clopro']['index']]['name'] != ""): ?>
										<?php echo ((is_array($_tmp=$this->_tpl_vars['oldprojects'][$this->_sections['clopro']['index']]['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true)); ?>

										<?php else: ?>
										<?php echo ((is_array($_tmp=$this->_tpl_vars['oldprojects'][$this->_sections['clopro']['index']]['desc'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...", true) : smarty_modifier_truncate($_tmp, 30, "...", true)); ?>

										<?php endif; ?>
									</a>
								</div>
							</td>
                            
							<td class="c"><?php echo $this->_tpl_vars['oldprojects'][$this->_sections['clopro']['index']]['grade']; ?>
</td>
                            <?php if ($this->_tpl_vars['oldprojects'][$this->_sections['clopro']['index']]['svid'] == 0): ?>
                            <td class="d"></td>
                            <?php else: ?>
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
                            <?php if ($this->_tpl_vars['oldprojects'][$this->_sections['clopro']['index']]['svid'] == $this->_tpl_vars['users'][$this->_sections['user']['index']]['ID']): ?>
							<td class="d" style="text-align:left"><?php echo $this->_tpl_vars['users'][$this->_sections['user']['index']]['name']; ?>
&nbsp;&nbsp;</td>
                            <?php endif; ?>
                           <?php endfor; endif; ?>
                           <?php endif; ?>
                            <?php if ($this->_tpl_vars['oldprojects'][$this->_sections['clopro']['index']]['gradedon'] == ""): ?>
                            <td class="e"></td>
                            <?php else: ?>
                            <td class="e"><?php echo $this->_tpl_vars['oldprojects'][$this->_sections['clopro']['index']]['gradedon']; ?>
</td>
                            <?php endif; ?>
							<td class="tools">
								<?php if ($this->_tpl_vars['userpermissions']['projects']['edit']): ?>
								<a class="tool_edit" href="manageproject.php?action=editform&amp;id=<?php echo $this->_tpl_vars['oldprojects'][$this->_sections['clopro']['index']]['ID']; ?>
" title="<?php echo $this->_config[0]['vars']['edit']; ?>
"></a>
								<?php endif; ?>
								<?php if ($this->_tpl_vars['userpermissions']['projects']['del']): ?>
								<a class="tool_del" href="javascript:confirmfunction('<?php echo $this->_config[0]['vars']['confirmdel']; ?>
','deleteElement(\'proj_<?php echo $this->_tpl_vars['oldprojects'][$this->_sections['clopro']['index']]['ID']; ?>
\',\'manageproject.php?action=del&amp;id=<?php echo $this->_tpl_vars['oldprojects'][$this->_sections['clopro']['index']]['ID']; ?>
\')');"  title="<?php echo $this->_config[0]['vars']['delete']; ?>
" ></a>
								<?php endif; ?>
							</td>
						</tr>

						<tr class="acc">
							<td colspan="6">
								<div class="accordion_toggle"></div>
								<div class="accordion_content">
									<div class="acc-in">
										<?php echo $this->_tpl_vars['oldprojects'][$this->_sections['clopro']['index']]['desc']; ?>

									</div>
								</div>
							</td>
						</tr>
					</tbody>
                    <?php endfor; endif; ?>
                    
					</table>
				</div> 
				
			</div> 			<div class="content-spacer"></div>

			<?php echo '
				<script type = "text/javascript">
					//var accord_projects = new accordion(\'acc-projects\');
					var accord_oldprojects = new accordion(\'acc-oldprojects\');
				</script>
			'; ?>



		</div> 	</div> </div> 
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