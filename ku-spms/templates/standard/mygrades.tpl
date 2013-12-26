{include file="header.tpl"  jsload = "ajax"  jsload1="tinymce" jsload3 = "lightbox"}
{include file="tabsmenue-desk.tpl" grdstab = "active"}

<div id="content-left">
	<div id="content-left-in">
		<div class="grds">
			
            <h1>My grades</h1>

			<div class="headline">
				<a href="javascript:void(0);" id="acc-projects_toggle" class="win_none" onclick = "toggleBlock('acc-projects');"></a>

				{if $userpermissions.grades.add}
					<div class="wintools">
						<a class="add" href="javascript:blindtoggle('form_addmyproject');" id="add_myprojects" onclick="toggleClass(this,'add-active','add');toggleClass('add_butn_myprojects','butn_link_active','butn_link');toggleClass('sm_myprojects','smooth','nosmooth');"><span>Add grades</span></a>
					</div>
                    {/if}

				<h2>
					<a  title="My grades"><img src="./templates/standard/images/symbols/grades.jpg" alt=""/>My grades</a>
				</h2>
			</div>

			<div class="block" id="acc-projects">

				{*Add grades*}
				<div id = "form_addmygrade" class="addmenue" style = "display:none;">
				{include file="addgrade.tpl" mygrades="1"}
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

                    {section name=clopro loop=$oldprojects}

					{*Color-Mix*}
					{if $smarty.section.clopro.index % 2 == 0}
					<tbody class="color-a" id="proj_{$oldprojects[clopro].ID}">
					{else}
					<tbody class="color-b" id="proj_{$oldprojects[clopro].ID}">
					{/if}
						<tr>
							<td class="a">{if $userpermissions.projects.close}<a class="butn_checked" href="manageproject.php?action=open&amp;id={$oldprojects[clopro].ID}" title="{#open#}"></a>{/if}</td>
							<td class="b">
								<div class="toggle-in">
								<span class="acc-toggle" onclick="javascript:accord_oldprojects.activate($$('#acc-oldprojects .accordion_toggle')[{$smarty.section.clopro.index}]);toggleAccordeon('acc-oldprojects',this);"></span>
									<a href="manageproject.php?action=showproject&amp;id={$oldprojects[clopro].ID}" title="{$oldprojects[clopro].name}">
										{if $oldprojects[clopro].name != ""}
										{$oldprojects[clopro].name|truncate:30:"...":true}
										{else}
										{$oldprojects[clopro].desc|truncate:30:"...":true}
										{/if}
									</a>
								</div>
							</td>
                            
							<td class="c">{$oldprojects[clopro].grade}</td>
                            {if $oldprojects[clopro].svid==0}
                            <td class="d"></td>
                            {else}
                            {section name=user loop=$users}
                            {if $oldprojects[clopro].svid==$users[user].ID}
							<td class="d" style="text-align:left">{$users[user].name}&nbsp;&nbsp;</td>
                            {/if}
                           {/section}
                           {/if}
                            {if $oldprojects[clopro].gradedon==""}
                            <td class="e"></td>
                            {else}
                            <td class="e">{$oldprojects[clopro].gradedon}</td>
                            {/if}
							<td class="tools">
								{if $userpermissions.projects.edit}
								<a class="tool_edit" href="manageproject.php?action=editform&amp;id={$oldprojects[clopro].ID}" title="{#edit#}"></a>
								{/if}
								{if $userpermissions.projects.del}
								<a class="tool_del" href="javascript:confirmfunction('{#confirmdel#}','deleteElement(\'proj_{$oldprojects[clopro].ID}\',\'manageproject.php?action=del&amp;id={$oldprojects[clopro].ID}\')');"  title="{#delete#}" ></a>
								{/if}
							</td>
						</tr>

						<tr class="acc">
							<td colspan="6">
								<div class="accordion_toggle"></div>
								<div class="accordion_content">
									<div class="acc-in">
										{$oldprojects[clopro].desc}
									</div>
								</div>
							</td>
						</tr>
					</tbody>
                    {/section}
                    
					</table>
				</div> {*smooth End*}

				
			</div> {*block END*}
			<div class="content-spacer"></div>

			{literal}
				<script type = "text/javascript">
					//var accord_projects = new accordion('acc-projects');
					var accord_oldprojects = new accordion('acc-oldprojects');
				</script>
			{/literal}


		</div> {*grds END*}
	</div> {*content-left-in END*}
</div> {*content-left END*}

{include file="sidebar-a.tpl"}
{include file="footer.tpl"}