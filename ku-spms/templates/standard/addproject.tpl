<div class="block_in_wrapper">
<h2>{#addproject#}</h2>

	<form class="main" method="post" action="admin.php?action=addpro" {literal}onsubmit="return validateCompleteForm(this);"{/literal} >
	<fieldset>
		<div class="row"><label for="name">{#name#}:</label><input type="text" class="text" name="name" id="name" required="1" realname="{#name#}" /></div>
		<div class="row"><label for="desc">{#description#}:</label><div class="editor"><textarea name="desc" id="desc"  rows="3" cols="1" ></textarea></div></div>

	    <div class="clear_both_b"></div>

		<div class="row">
		<label for="end">{#due#}:</label>
		<input type="text" class="text" name="end"  id="end"  realname="{#due#}" regexp="{literal}\d{2}.\d{2}.\d{4}{/literal}" />
		<br /><br />
		<label for = "neverdue"></label><input type = "checkbox" class = "checkbox" value = "neverdue" name = "neverdue" id = "neverdue" onclick = "$('end').value='';$('end').disabled='disabled';">{#neverdue#}
		</div>

		<div class="datepick">
			<div id = "datepicker_project" class="picker" style = "display:none;"></div>
		</div>

		<script type="text/javascript">
		theCal{$lists[list].ID} = new calendar({$theM},{$theY});
		theCal{$lists[list].ID}.dayNames = ["{#monday#}","{#tuesday#}","{#wednesday#}","{#thursday#}","{#friday#}","{#saturday#}","{#sunday#}"];
		theCal{$lists[list].ID}.monthNames = ["{#january#}","{#february#}","{#march#}","{#april#}","{#may#}","{#june#}","{#july#}","{#august#}","{#september#}","{#october#}","{#november#}","{#december#}"];
		theCal{$lists[list].ID}.relateTo = "end";
		theCal{$lists[list].ID}.getDatepicker("datepicker_project");
	</script>

		<div class = "row">
		<label for = "budget">{#budget#}:</label>
		<input type = "text" class="text" name = "budget" id = "budget" />
		</div>

		<div class="row">
        <label>{#members#}:</label>
		<div style="float:left;">
        {section name=users loop=$users}
            {if $users[users].role==2 && $users[users].ID == $userid}
                {section name=user loop=$users}
                    <div class="row">
                    {if $users[user].ID == $userid}
                    <input type="checkbox" class="checkbox" value="{$users[user].ID}" name="assignto[]" id="{$users[user].ID}" checked="checked"/><label for="{$users[user].ID}">{$users[user].name}</label><br />
                    {elseif $users[user].role==3}
                    <input type="radio" class="checkbox" value="{$users[user].ID}" name="assignto[]" id="{$users[user].ID}"/><label for="{$users[user].ID}">{$users[user].name}</label><br />
                    {/if}
                    </div>
                {/section}
           {elseif $users[users].role==3 && $users[users].ID == $userid}
                {section name=user loop=$users}
                    <div class="row">
                    {if $users[user].ID == $userid}
                    <input type="checkbox" class="checkbox" value="{$users[user].ID}" name="assignto[]" id="{$users[user].ID}" checked="checked"/><label for="{$users[user].ID}">{$users[user].name}</label><br />
                    {elseif $users[user].role==2}
                    <input type="radio" class="checkbox" value="{$users[user].ID}" name="assignto[]" id="{$users[user].ID}"/><label for="{$users[user].ID}">{$users[user].name}</label><br />
                    {/if}
                    </div>
                {/section}
            {/if}
        {/section}
	    </div>
        
		</div>

		<input type="hidden" name="assignme" value="1" />

	    <div class="clear_both_b"></div>

		<div class="row-butn-bottom">
		<label>&nbsp;</label>
		<button type="submit" onfocus="this.blur();">{#addbutton#}</button>
		{if $myprojects == "1"}
		<button type = "reset" onclick="blindtoggle('form_addmyproject');toggleClass('add_myprojects','add-active','add');toggleClass('add_butn_myprojects','butn_link_active','butn_link');toggleClass('sm_myprojects','smooth','nosmooth');return false;" onfocus="this.blur();">{#cancel#}</button>
		{else}
		<button type = "reset" onclick="blindtoggle('form_{$myprojects[project].ID}');return false;">{#cancel#}</button>
		{/if}
		</div>


	</fieldset>
	</form>

</div> {*block_in_wrapper end*}