<?php /* Smarty version 2.6.19, created on 2011-10-17 07:57:34
         compiled from tabsmenue-desk.tpl */ ?>
<div class="tabswrapper">

<ul class="tabs">
		<li class="desk"><a <?php if ($this->_tpl_vars['desktab'] == 'active'): ?>class="active"<?php endif; ?> href="index.php"><span><?php echo $this->_config[0]['vars']['desktop']; ?>
</span></a></li>
		<li class="projects"><a <?php if ($this->_tpl_vars['projectstab'] == 'active'): ?>class="active"<?php endif; ?> href="myprojects.php"><span><?php echo $this->_config[0]['vars']['myprojects']; ?>
</span></a></li>		
		<li class="tasks"><a <?php if ($this->_tpl_vars['taskstab'] == 'active'): ?>class="active"<?php endif; ?> href="mytasks.php"><span><?php echo $this->_config[0]['vars']['mytasks']; ?>
</span></a></li>	
		<li class="msgs"><a <?php if ($this->_tpl_vars['msgstab'] == 'active'): ?>class="active"<?php endif; ?> href="managemessage.php?action=mymsgs"><span><?php echo $this->_config[0]['vars']['mymessages']; ?>
</span></a></li>	
      <li class="grds"><a <?php if ($this->_tpl_vars['grdstab'] == 'active'): ?>class="active"<?php endif; ?> href="mygrades.php"><span>My grades</span></a></li>			
	</ul>
</div>