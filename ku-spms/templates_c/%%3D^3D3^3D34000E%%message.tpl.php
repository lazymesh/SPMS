<?php /* Smarty version 2.6.19, created on 1980-01-04 00:13:56
         compiled from message.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'message.tpl', 28, false),array('modifier', 'nl2br', 'message.tpl', 251, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('jsload' => 'ajax','jsload1' => 'tinymce','jsload3' => 'lightbox')));
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

			<div class="infowin_left" style = "display:none;" id = "systemmsg">
				<?php if ($this->_tpl_vars['mode'] == 'added'): ?>
					<span class="info_in_green"><img src="templates/standard/images/symbols/msg.png" alt=""/><?php echo $this->_config[0]['vars']['messagewasadded']; ?>
</span>
				<?php elseif ($this->_tpl_vars['mode'] == 'edited'): ?>
					<span class="info_in_yellow"><img src="templates/standard/images/symbols/msg.png" alt=""/><?php echo $this->_config[0]['vars']['messagewasedited']; ?>
</span>
				<?php elseif ($this->_tpl_vars['mode'] == 'deleted'): ?>
					<span class="info_in_red"><img src="templates/standard/images/symbols/msg.png" alt=""/><?php echo $this->_config[0]['vars']['messagewasdeleted']; ?>
</span>
				<?php elseif ($this->_tpl_vars['mode'] == 'replied'): ?>
					<span class="info_in_green"><img src="templates/standard/images/symbols/msgs.png" alt=""/><?php echo $this->_config[0]['vars']['replywasadded']; ?>
</span>
				<?php endif; ?>
			</div>
			
			<?php echo '
				<script type = "text/javascript">
					apperar = new Effect.Appear(\'systemmsg\', { duration: 2.0 })
					makeTimer("new Effect.Fade(\'systemmsg\', { duration: 2.0 })",7000);
				</script>
			'; ?>


			<div class="breadcrumb">
				<a href="manageproject.php?action=showproject&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
"><img src="./templates/standard/images/symbols/projects.png" alt="" /><?php echo ((is_array($_tmp=$this->_tpl_vars['projectname'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, "...", true) : smarty_modifier_truncate($_tmp, 40, "...", true)); ?>
</a>
				<a href="managemessage.php?action=showproject&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
"><img src="./templates/standard/images/symbols/msgs.png" alt="" /><?php echo $this->_config[0]['vars']['messages']; ?>
</a>
			</div>

			<h1 class="second"><img src="./templates/standard/images/symbols/msgs.png" alt="" /><?php echo ((is_array($_tmp=$this->_tpl_vars['message']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, "...", true) : smarty_modifier_truncate($_tmp, 40, "...", true)); ?>
</h1>

			<div class="statuswrapper">
				<ul>
					<?php if ($this->_tpl_vars['userpermissions']['messages']['close']): ?>
						<li class="link"><a class="reply" id="add_reply_a" href="javascript:void(0);" onclick="blindtoggle('form_reply_a');toggleClass(this,'reply-active','reply');toggleClass('sm_replies_a','smooth','nosmooth');" title="<?php echo $this->_config[0]['vars']['reply']; ?>
"></a></li>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['userpermissions']['messages']['edit']): ?>
						<li class="link"><a class="edit" href="javascript:void(0);"  id="edit_butn" onclick="blindtoggle('form_edit');toggleClass(this,'edit-active','edit');toggleClass('sm_replies_a','smooth','nosmooth');" title="<?php echo $this->_config[0]['vars']['edit']; ?>
"></a></li>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['message']['replies']): ?>
						<li><a><?php echo $this->_config[0]['vars']['replies']; ?>
: <?php echo $this->_tpl_vars['message']['replies']; ?>
</a></li>
					<?php endif; ?>
				</ul>
			</div>

						<?php if ($this->_tpl_vars['userpermissions']['messages']['close']): ?>
				<div id = "form_reply_a" class="addmenue" style = "display:none;">
					<div class="content-spacer"></div>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "replyform.tpl", 'smarty_include_vars' => array('showhtml' => 'no','reply' => 'a')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</div>
			<?php endif; ?>

						<?php if ($this->_tpl_vars['userpermissions']['messages']['edit']): ?>
				<div id = "form_edit" class="addmenue" style = "display:none;">
					<div class="content-spacer"></div>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "editmessageform.tpl", 'smarty_include_vars' => array('showhtml' => 'no')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</div>
			<?php endif; ?>

			<div class="content-spacer"></div>

			<div id="sm_replies_a" class="nosmooth">
				<div id="message" class="descript">
					<?php if ($this->_tpl_vars['message']['avatar'] != ""): ?>
						<div class="avatar"><img src = "thumb.php?width=80&amp;height=80&amp;pic=files/<?php echo $this->_tpl_vars['cl_config']; ?>
/avatar/<?php echo $this->_tpl_vars['message']['avatar']; ?>
" alt="" /></div>
					<?php else: ?>
						<?php if ($this->_tpl_vars['message']['gender'] == 'f'): ?>
							<div class="avatar"><img src = "thumb.php?width=80&amp;height=80&amp;pic=templates/standard/images/no-avatar-female.jpg" alt="" /></div>
						<?php else: ?>
							<div class="avatar"><img src = "thumb.php?width=80&amp;height=80&amp;pic=templates/standard/images/no-avatar-male.jpg" alt="" /></div>
						<?php endif; ?>
					<?php endif; ?>

					<div class="message">
						<div class="message-in">
							<h2><?php echo $this->_tpl_vars['message']['endstring']; ?>
&nbsp;/&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['message']['username'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...", true) : smarty_modifier_truncate($_tmp, 20, "...", true)); ?>
</h2>
							<?php echo $this->_tpl_vars['message']['text']; ?>

						</div>

						<?php if ($this->_tpl_vars['message']['tagsarr'][0] != "" || $this->_tpl_vars['message']['milestones'][0] != ""): ?>
							<div class="content-spacer-b"></div>
						
														<?php if ($this->_tpl_vars['message']['milestones'][0] != ""): ?>
								<p>
									<strong><?php echo $this->_config[0]['vars']['milestone']; ?>
: </strong>
									<a href = "managemilestone.php?action=showmilestone&amp;msid=<?php echo $this->_tpl_vars['message']['milestones']['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
"><?php echo $this->_tpl_vars['message']['milestones']['name']; ?>
</a>
								</p>
							<?php endif; ?>

														<?php if ($this->_tpl_vars['message']['tagsarr'][0] != ""): ?>
								<p>
									<strong><?php echo $this->_config[0]['vars']['tags']; ?>
: </strong>
									<?php unset($this->_sections['tag']);
$this->_sections['tag']['name'] = 'tag';
$this->_sections['tag']['loop'] = is_array($_loop=$this->_tpl_vars['message']['tagsarr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tag']['show'] = true;
$this->_sections['tag']['max'] = $this->_sections['tag']['loop'];
$this->_sections['tag']['step'] = 1;
$this->_sections['tag']['start'] = $this->_sections['tag']['step'] > 0 ? 0 : $this->_sections['tag']['loop']-1;
if ($this->_sections['tag']['show']) {
    $this->_sections['tag']['total'] = $this->_sections['tag']['loop'];
    if ($this->_sections['tag']['total'] == 0)
        $this->_sections['tag']['show'] = false;
} else
    $this->_sections['tag']['total'] = 0;
if ($this->_sections['tag']['show']):

            for ($this->_sections['tag']['index'] = $this->_sections['tag']['start'], $this->_sections['tag']['iteration'] = 1;
                 $this->_sections['tag']['iteration'] <= $this->_sections['tag']['total'];
                 $this->_sections['tag']['index'] += $this->_sections['tag']['step'], $this->_sections['tag']['iteration']++):
$this->_sections['tag']['rownum'] = $this->_sections['tag']['iteration'];
$this->_sections['tag']['index_prev'] = $this->_sections['tag']['index'] - $this->_sections['tag']['step'];
$this->_sections['tag']['index_next'] = $this->_sections['tag']['index'] + $this->_sections['tag']['step'];
$this->_sections['tag']['first']      = ($this->_sections['tag']['iteration'] == 1);
$this->_sections['tag']['last']       = ($this->_sections['tag']['iteration'] == $this->_sections['tag']['total']);
?>
										<a href = "managetags.php?action=gettag&tag=<?php echo $this->_tpl_vars['message']['tagsarr'][$this->_sections['tag']['index']]; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
"><?php echo $this->_tpl_vars['message']['tagsarr'][$this->_sections['tag']['index']]; ?>
</a>
									<?php endfor; endif; ?>
								</p>
							<?php endif; ?>
						<?php endif; ?>

												<?php if ($this->_tpl_vars['message']['files'][0][0] > 0): ?>
							<div class="content-spacer-b"></div>
							<strong><?php echo $this->_config[0]['vars']['files']; ?>
:</strong>

							<div class="inwrapper">
								<ul>
									<?php unset($this->_sections['file']);
$this->_sections['file']['name'] = 'file';
$this->_sections['file']['loop'] = is_array($_loop=$this->_tpl_vars['message']['files']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['file']['show'] = true;
$this->_sections['file']['max'] = $this->_sections['file']['loop'];
$this->_sections['file']['step'] = 1;
$this->_sections['file']['start'] = $this->_sections['file']['step'] > 0 ? 0 : $this->_sections['file']['loop']-1;
if ($this->_sections['file']['show']) {
    $this->_sections['file']['total'] = $this->_sections['file']['loop'];
    if ($this->_sections['file']['total'] == 0)
        $this->_sections['file']['show'] = false;
} else
    $this->_sections['file']['total'] = 0;
if ($this->_sections['file']['show']):

            for ($this->_sections['file']['index'] = $this->_sections['file']['start'], $this->_sections['file']['iteration'] = 1;
                 $this->_sections['file']['iteration'] <= $this->_sections['file']['total'];
                 $this->_sections['file']['index'] += $this->_sections['file']['step'], $this->_sections['file']['iteration']++):
$this->_sections['file']['rownum'] = $this->_sections['file']['iteration'];
$this->_sections['file']['index_prev'] = $this->_sections['file']['index'] - $this->_sections['file']['step'];
$this->_sections['file']['index_next'] = $this->_sections['file']['index'] + $this->_sections['file']['step'];
$this->_sections['file']['first']      = ($this->_sections['file']['iteration'] == 1);
$this->_sections['file']['last']       = ($this->_sections['file']['iteration'] == $this->_sections['file']['total']);
?>
										<li id="fli_<?php echo $this->_tpl_vars['message']['files'][$this->_sections['file']['index']]['ID']; ?>
">
											<div class="itemwrapper" id="iw_<?php echo $this->_tpl_vars['message']['files'][$this->_sections['file']['index']]['ID']; ?>
">

												<table cellpadding="0" cellspacing="0" border="0">
													<tr>
														<td class="leftmen" valign="top">
															<div class="inmenue"></div>
														</td>
														<td class="thumb">
															<a href = "<?php echo $this->_tpl_vars['message']['files'][$this->_sections['file']['index']]['datei']; ?>
"<?php if ($this->_tpl_vars['message']['files'][$this->_sections['file']['index']]['imgfile'] == 1): ?> rel="lytebox[img<?php echo $this->_tpl_vars['message']['files'][$this->_sections['file']['index']]['ID']; ?>
]" <?php elseif ($this->_tpl_vars['message']['files'][$this->_sections['file']['index']]['imgfile'] == 2): ?> rel = "lyteframe[text<?php echo $this->_tpl_vars['message']['files'][$this->_sections['file']['index']]['ID']; ?>
]"<?php endif; ?> title="<?php echo $this->_tpl_vars['message']['files'][$this->_sections['file']['index']]['name']; ?>
">
																<?php if ($this->_tpl_vars['message']['files'][$this->_sections['file']['index']]['imgfile'] == 1): ?>
																	<img src = "thumb.php?pic=<?php echo $this->_tpl_vars['message']['files'][$this->_sections['file']['index']]['datei']; ?>
&amp;width=32" alt="<?php echo $this->_tpl_vars['message']['files'][$this->_sections['file']['index']]['name']; ?>
" />
																<?php else: ?>
																	<img src = "templates/standard/images/files/<?php echo $this->_tpl_vars['message']['files'][$this->_sections['file']['index']]['type']; ?>
.png" alt="<?php echo $this->_tpl_vars['message']['files'][$this->_sections['file']['index']]['name']; ?>
" />
																<?php endif; ?>
															</a>
														</td>
														<td class="rightmen" valign="top">
															<div class="inmenue">
																<?php if ($this->_tpl_vars['userpermissions']['files']['del']): ?>
																	<a class="del" href="javascript:void(0);" onclick = "javascript:confirmfunction('<?php echo $this->_tpl_vars['langfile']['confirmdel']; ?>
','deleteElement(\'fli_<?php echo $this->_tpl_vars['message']['files'][$this->_sections['file']['index']]['ID']; ?>
\',\'managefile.php?action=delete&id=<?php echo $this->_tpl_vars['message']['project']; ?>
&file=<?php echo $this->_tpl_vars['message']['files'][$this->_sections['file']['index']]['ID']; ?>
\')');" title="<?php echo $this->_config[0]['vars']['delete']; ?>
"></a>
																<?php endif; ?>
															</div>
														</td>
													</tr>
													<tr>
														<td colspan="3">
															<span class="name">
																<a href = "<?php echo $this->_tpl_vars['message']['files'][$this->_sections['file']['index']]['datei']; ?>
"<?php if ($this->_tpl_vars['message']['files'][$this->_sections['file']['index']]['imgfile'] == 1): ?> rel="lytebox[img<?php echo $this->_tpl_vars['message']['files'][$this->_sections['file']['index']]['ID']; ?>
]" <?php elseif ($this->_tpl_vars['message']['files'][$this->_sections['file']['index']]['imgfile'] == 2): ?> rel = "lyteframe[text<?php echo $this->_tpl_vars['message']['files'][$this->_sections['file']['index']]['ID']; ?>
]"<?php endif; ?> title="<?php echo $this->_tpl_vars['message']['files'][$this->_sections['file']['index']]['name']; ?>
">
																	<?php if ($this->_tpl_vars['message']['files'][$this->_sections['file']['index']]['title'] != ""): ?>
																	<?php echo ((is_array($_tmp=$this->_tpl_vars['message']['files'][$this->_sections['file']['index']]['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 13, "...", true) : smarty_modifier_truncate($_tmp, 13, "...", true)); ?>

																	<?php else: ?>
																	<?php echo ((is_array($_tmp=$this->_tpl_vars['message']['files'][$this->_sections['file']['index']]['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 13, "...", true) : smarty_modifier_truncate($_tmp, 13, "...", true)); ?>

																	<?php endif; ?>
																</a>
															</span>
														</td>
													<tr/>
												</table>

											</div> 										</li>
									<?php endfor; endif; ?> 								</ul>
							</div> 						<?php endif; ?>
					</div> 				</div> 				<div class="content-spacer"></div>
			</div> 
						<?php if ($this->_tpl_vars['replies'] > 0): ?>
				<div class="headline">
					<a href="javascript:void(0);" id="block-answers_toggle" class="win_block" onclick = "toggleBlock('block-answers');"></a>
					<div class="wintools">
						<?php if ($this->_tpl_vars['userpermissions']['messages']['close']): ?>
							<a class="add" href="javascript:blindtoggle('form_reply_b');" id="add_replies" onclick="toggleClass(this,'add-active','add');toggleClass('add_butn_replies','butn_link_active','butn_link');toggleClass('sm_replies','smooth','nosmooth');"><span><?php echo $this->_config[0]['vars']['answer']; ?>
</span></a>
						<?php endif; ?>
					</div>
					<h2><img src="./templates/standard/images/symbols/msgs.png" alt="" /><?php echo $this->_config[0]['vars']['replies']; ?>
</a></h2>
				</div>

				<div id="block-answers" class="block">
										<?php if ($this->_tpl_vars['userpermissions']['messages']['close']): ?>
						<div id = "form_reply_b" class="addmenue" style = "display:none;">
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "replyform.tpl", 'smarty_include_vars' => array('showhtml' => 'no')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						</div>
					<?php endif; ?>

					<div class="nosmooth" id="sm_replies">
						<table id="acc_replies" cellpadding="0" cellspacing="0" border="0">

							<thead>
								<tr>
									<th class="a"></th>
									<th class="b"><?php echo $this->_config[0]['vars']['message']; ?>
</th>
									<th class="c"><?php echo $this->_config[0]['vars']['on']; ?>
</th>
									<th class="d"><?php echo $this->_config[0]['vars']['by']; ?>
</th>
									<th class="tools"></th>
								</tr>
							</thead>

							<tfoot>
								<tr>
									<td colspan="5"></td>
								</tr>
							</tfoot>

							<?php unset($this->_sections['reply']);
$this->_sections['reply']['name'] = 'reply';
$this->_sections['reply']['loop'] = is_array($_loop=$this->_tpl_vars['replies']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['reply']['show'] = true;
$this->_sections['reply']['max'] = $this->_sections['reply']['loop'];
$this->_sections['reply']['step'] = 1;
$this->_sections['reply']['start'] = $this->_sections['reply']['step'] > 0 ? 0 : $this->_sections['reply']['loop']-1;
if ($this->_sections['reply']['show']) {
    $this->_sections['reply']['total'] = $this->_sections['reply']['loop'];
    if ($this->_sections['reply']['total'] == 0)
        $this->_sections['reply']['show'] = false;
} else
    $this->_sections['reply']['total'] = 0;
if ($this->_sections['reply']['show']):

            for ($this->_sections['reply']['index'] = $this->_sections['reply']['start'], $this->_sections['reply']['iteration'] = 1;
                 $this->_sections['reply']['iteration'] <= $this->_sections['reply']['total'];
                 $this->_sections['reply']['index'] += $this->_sections['reply']['step'], $this->_sections['reply']['iteration']++):
$this->_sections['reply']['rownum'] = $this->_sections['reply']['iteration'];
$this->_sections['reply']['index_prev'] = $this->_sections['reply']['index'] - $this->_sections['reply']['step'];
$this->_sections['reply']['index_next'] = $this->_sections['reply']['index'] + $this->_sections['reply']['step'];
$this->_sections['reply']['first']      = ($this->_sections['reply']['iteration'] == 1);
$this->_sections['reply']['last']       = ($this->_sections['reply']['iteration'] == $this->_sections['reply']['total']);
?>

																<?php if ($this->_sections['reply']['index'] % 2 == 0): ?>
								<tbody class="color-a" id="reply_<?php echo $this->_tpl_vars['replies'][$this->_sections['reply']['index']]['ID']; ?>
">
								<?php else: ?>
								<tbody class="color-b" id="reply_<?php echo $this->_tpl_vars['replies'][$this->_sections['reply']['index']]['ID']; ?>
">
								<?php endif; ?>
									<tr>
										<td></td>
										<td>
											<div class="toggle-in">
												<span class="acc-toggle" onclick="javascript:accord_answer.activate($$('#acc_replies .accordion_toggle')[<?php echo $this->_sections['reply']['index']; ?>
]);toggleAccordeon('acc_replies',this);"><?php echo ((is_array($_tmp=$this->_tpl_vars['replies'][$this->_sections['reply']['index']]['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...", true) : smarty_modifier_truncate($_tmp, 20, "...", true)); ?>
</span>
											</div>
										</td>
										<td><?php echo $this->_tpl_vars['replies'][$this->_sections['reply']['index']]['postdate']; ?>
</td>
										<td>
											<a href="manageuser.php?action=profile&amp;id=<?php echo $this->_tpl_vars['replies'][$this->_sections['reply']['index']]['user']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['replies'][$this->_sections['reply']['index']]['username'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...", true) : smarty_modifier_truncate($_tmp, 20, "...", true)); ?>
</a>
										</td>
										<td class="tools">
											<?php if ($this->_tpl_vars['userpermissions']['messages']['edit']): ?>
											<a class="tool_edit" href="managemessage.php?action=editform&amp;mid=<?php echo $this->_tpl_vars['replies'][$this->_sections['reply']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['message']['project']; ?>
" title="<?php echo $this->_config[0]['vars']['edit']; ?>
"></a>
											<?php endif; ?>
											<?php if ($this->_tpl_vars['userpermissions']['messages']['del']): ?>
											<a class="tool_del" href="javascript:confirmfunction('<?php echo $this->_config[0]['vars']['confirmdel']; ?>
','deleteElement(\'reply_<?php echo $this->_tpl_vars['replies'][$this->_sections['reply']['index']]['ID']; ?>
\',\'managemessage.php?action=del&amp;mid=<?php echo $this->_tpl_vars['replies'][$this->_sections['reply']['index']]['ID']; ?>
&amp;id=<?php echo $this->_tpl_vars['message']['project']; ?>
\')');"  title="<?php echo $this->_config[0]['vars']['delete']; ?>
"></a>
											<?php endif; ?>
										</td>
									</tr>

									<tr class="acc">
										<td colspan="5">
											<div class="accordion_toggle"></div>
											<div class="accordion_content">
												<div class="acc-in">

													<?php if ($this->_tpl_vars['replies'][$this->_sections['reply']['index']]['avatar'] != ""): ?>
														<div class="avatar"><img src = "thumb.php?width=80&amp;height=80&amp;pic=files/<?php echo $this->_tpl_vars['cl_config']; ?>
/avatar/<?php echo $this->_tpl_vars['replies'][$this->_sections['reply']['index']]['avatar']; ?>
" alt="" /></div>
													<?php else: ?>
														<?php if ($this->_tpl_vars['replies'][$this->_sections['reply']['index']]['gender'] == 'f'): ?>
															<div class="avatar"><img src = "thumb.php?width=80&amp;height=80&amp;pic=templates/standard/images/no-avatar-female.jpg" alt="" /></div>
														<?php else: ?>
															<div class="avatar"><img src = "thumb.php?width=80&amp;height=80&amp;pic=templates/standard/images/no-avatar-male.jpg" alt="" /></div>
														<?php endif; ?>
													<?php endif; ?>
													
													<div class="message">
														<div class="message-in">
															<?php echo ((is_array($_tmp=$this->_tpl_vars['replies'][$this->_sections['reply']['index']]['text'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

														</div>

																												<?php if ($this->_tpl_vars['replies'][$this->_sections['reply']['index']]['tagsarr'][0] != ""): ?>
															<p class="tags-miles">
																<strong><?php echo $this->_config[0]['vars']['tags']; ?>
: </strong>
																<?php unset($this->_sections['tag']);
$this->_sections['tag']['name'] = 'tag';
$this->_sections['tag']['loop'] = is_array($_loop=$this->_tpl_vars['replies'][$this->_sections['reply']['index']]['tagsarr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tag']['show'] = true;
$this->_sections['tag']['max'] = $this->_sections['tag']['loop'];
$this->_sections['tag']['step'] = 1;
$this->_sections['tag']['start'] = $this->_sections['tag']['step'] > 0 ? 0 : $this->_sections['tag']['loop']-1;
if ($this->_sections['tag']['show']) {
    $this->_sections['tag']['total'] = $this->_sections['tag']['loop'];
    if ($this->_sections['tag']['total'] == 0)
        $this->_sections['tag']['show'] = false;
} else
    $this->_sections['tag']['total'] = 0;
if ($this->_sections['tag']['show']):

            for ($this->_sections['tag']['index'] = $this->_sections['tag']['start'], $this->_sections['tag']['iteration'] = 1;
                 $this->_sections['tag']['iteration'] <= $this->_sections['tag']['total'];
                 $this->_sections['tag']['index'] += $this->_sections['tag']['step'], $this->_sections['tag']['iteration']++):
$this->_sections['tag']['rownum'] = $this->_sections['tag']['iteration'];
$this->_sections['tag']['index_prev'] = $this->_sections['tag']['index'] - $this->_sections['tag']['step'];
$this->_sections['tag']['index_next'] = $this->_sections['tag']['index'] + $this->_sections['tag']['step'];
$this->_sections['tag']['first']      = ($this->_sections['tag']['iteration'] == 1);
$this->_sections['tag']['last']       = ($this->_sections['tag']['iteration'] == $this->_sections['tag']['total']);
?>
																	<a href = "managetags.php?action=gettag&tag=<?php echo $this->_tpl_vars['replies'][$this->_sections['reply']['index']]['tagsarr'][$this->_sections['tag']['index']]; ?>
&amp;id=<?php echo $this->_tpl_vars['project']['ID']; ?>
"><?php echo $this->_tpl_vars['replies'][$this->_sections['reply']['index']]['tagsarr'][$this->_sections['tag']['index']]; ?>
</a>
																<?php endfor; endif; ?>
															</p>
														<?php endif; ?>

																										<?php if ($this->_tpl_vars['replies'][$this->_sections['reply']['index']]['files'][0][0] > 0): ?>
														<div class="content-spacer-b"></div>
														<strong><?php echo $this->_config[0]['vars']['files']; ?>
:</strong>
														<div class="inwrapper">
															<ul>
																<?php unset($this->_sections['file']);
$this->_sections['file']['name'] = 'file';
$this->_sections['file']['loop'] = is_array($_loop=$this->_tpl_vars['replies'][$this->_sections['reply']['index']]['files']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['file']['show'] = true;
$this->_sections['file']['max'] = $this->_sections['file']['loop'];
$this->_sections['file']['step'] = 1;
$this->_sections['file']['start'] = $this->_sections['file']['step'] > 0 ? 0 : $this->_sections['file']['loop']-1;
if ($this->_sections['file']['show']) {
    $this->_sections['file']['total'] = $this->_sections['file']['loop'];
    if ($this->_sections['file']['total'] == 0)
        $this->_sections['file']['show'] = false;
} else
    $this->_sections['file']['total'] = 0;
if ($this->_sections['file']['show']):

            for ($this->_sections['file']['index'] = $this->_sections['file']['start'], $this->_sections['file']['iteration'] = 1;
                 $this->_sections['file']['iteration'] <= $this->_sections['file']['total'];
                 $this->_sections['file']['index'] += $this->_sections['file']['step'], $this->_sections['file']['iteration']++):
$this->_sections['file']['rownum'] = $this->_sections['file']['iteration'];
$this->_sections['file']['index_prev'] = $this->_sections['file']['index'] - $this->_sections['file']['step'];
$this->_sections['file']['index_next'] = $this->_sections['file']['index'] + $this->_sections['file']['step'];
$this->_sections['file']['first']      = ($this->_sections['file']['iteration'] == 1);
$this->_sections['file']['last']       = ($this->_sections['file']['iteration'] == $this->_sections['file']['total']);
?>
																	<li id="fli_<?php echo $this->_tpl_vars['replies'][$this->_sections['reply']['index']]['files'][$this->_sections['file']['index']]['ID']; ?>
">
																		<div class="itemwrapper">

																			<table cellpadding="0" cellspacing="0" border="0">
																				<tr>
																					<td class="leftmen" valign="top">
																						<div class="inmenue"></div>
																					</td>
																					<td class="thumb">
																						<a href = "<?php echo $this->_tpl_vars['replies'][$this->_sections['reply']['index']]['files'][$this->_sections['file']['index']]['datei']; ?>
"<?php if ($this->_tpl_vars['replies'][$this->_sections['reply']['index']]['files'][$this->_sections['file']['index']]['imgfile'] == 1): ?> rel="lytebox[img<?php echo $this->_tpl_vars['replies'][$this->_sections['reply']['index']]['files'][$this->_sections['file']['index']]['ID']; ?>
]" <?php elseif ($this->_tpl_vars['replies'][$this->_sections['reply']['index']]['files'][$this->_sections['file']['index']]['imgfile'] == 2): ?> rel = "lyteframe[text<?php echo $this->_tpl_vars['replies'][$this->_sections['reply']['index']]['files'][$this->_sections['file']['index']]['ID']; ?>
]"<?php endif; ?> title="<?php echo $this->_tpl_vars['replies'][$this->_sections['reply']['index']]['files'][$this->_sections['file']['index']]['name']; ?>
">
																							<?php if ($this->_tpl_vars['replies'][$this->_sections['reply']['index']]['files'][$this->_sections['file']['index']]['imgfile'] == 1): ?>
																							<img src = "thumb.php?pic=<?php echo $this->_tpl_vars['replies'][$this->_sections['reply']['index']]['files'][$this->_sections['file']['index']]['datei']; ?>
&amp;width=32" alt="" />
																							<?php else: ?>
																							<img src = "templates/standard/images/files/<?php echo $this->_tpl_vars['replies'][$this->_sections['reply']['index']]['files'][$this->_sections['file']['index']]['type']; ?>
.png" alt="" />
																							<?php endif; ?>
																						</a>
																					</td>
																					<td class="rightmen" valign="top">
																						<div class="inmenue">
																							<?php if ($this->_tpl_vars['userpermissions']['messages']['del']): ?>
																								<a class="del" href="javascript:void(0);" onclick = "javascript:confirmfunction('<?php echo $this->_tpl_vars['langfile']['confirmdel']; ?>
','deleteElement(\'fli_<?php echo $this->_tpl_vars['replies'][$this->_sections['reply']['index']]['files'][$this->_sections['file']['index']]['ID']; ?>
\',\'managefile.php?action=delete&id=<?php echo $this->_tpl_vars['myprojects'][$this->_sections['project']['index']]['ID']; ?>
&file=<?php echo $this->_tpl_vars['replies'][$this->_sections['reply']['index']]['files'][$this->_sections['file']['index']]['ID']; ?>
\')');"></a>
																							<?php endif; ?>
																						</div>
																					</td>
																				</tr>
																				<tr>
																					<td colspan="3">
																						<span class="name"><a href = "<?php echo $this->_tpl_vars['replies'][$this->_sections['reply']['index']]['files'][$this->_sections['file']['index']]['datei']; ?>
"<?php if ($this->_tpl_vars['replies'][$this->_sections['reply']['index']]['files'][$this->_sections['file']['index']]['imgfile'] == 1): ?> rel="lytebox[img<?php echo $this->_tpl_vars['replies'][$this->_sections['reply']['index']]['files'][$this->_sections['file']['index']]['ID']; ?>
]" <?php elseif ($this->_tpl_vars['replies'][$this->_sections['reply']['index']]['files'][$this->_sections['file']['index']]['imgfile'] == 2): ?> rel = "lyteframe[text<?php echo $this->_tpl_vars['replies'][$this->_sections['reply']['index']]['files'][$this->_sections['file']['index']]['ID']; ?>
]"<?php endif; ?> title="<?php echo $this->_tpl_vars['replies'][$this->_sections['reply']['index']]['files'][$this->_sections['file']['index']]['name']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['replies'][$this->_sections['reply']['index']]['files'][$this->_sections['file']['index']]['name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 15, "...", true) : smarty_modifier_truncate($_tmp, 15, "...", true)); ?>
</a></span>
																					</td>
																				<tr/>
																			</table>

																		</div> 																	</li>
																<?php endfor; endif; ?>
															</ul>
														</div> 													<?php endif; ?>
												</div>
											</div>
										</div>
									</td>
								</tr>
							</tbody>
						<?php endfor; endif; ?>
					</table>
				</div> 
				<div class="tablemenue">
					<div class="tablemenue-in">
						<a class="butn_link" href="javascript:blindtoggle('form_reply_b');"  id="add_butn_replies" onclick="toggleClass('add_replies','add-active','add');toggleClass(this,'butn_link_active','butn_link');toggleClass('sm_replies','smooth','nosmooth');"><?php echo $this->_config[0]['vars']['answer']; ?>
</a>
					</div>
				</div>

				</div> 
				<?php echo '
					<script type = "text/javascript">
						var accord_answer = new accordion(\'acc_replies\');
					</script>
				'; ?>


				<div class="content-spacer"></div>
			<?php endif; ?> 
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