<div class="block_in_wrapper">
	<form class="main" method="post" action="admin.php?action=adduser" {literal}onsubmit="return validateCompleteForm(this);"{/literal}>
		<fieldset>

			<div class="row">
				<label for="name">Full name:</label>
				<input type="text" name="name" id="name" required="1" realname="{#name#}" />
			</div>
			<div class="row">
				<label for="company">Faculty:</label>
				<input type="text" name="company" id="company" realname="{#company#}" />
			</div>
			<div class="row">
				<label for="email">{#email#}:</label>
				<input type="text" name="email" id="email" realname="{#email#}" />
			</div>
			<div class="row">
				<label for="pass">{#password#}:</label>
				<input type="password" name="pass" id="pass" required="1" realname="{#password#}" />
			</div>
			<div class = "row">
				<label id = "gender">Gender:</label>
				<select name = "gender" id = "gender" realname = "{#gender#}" />
							{if $user.gender == ""}
							<option value = "" selected>{#chooseone#}</option>
							{/if}
							<option {if $user.gender == "m"}selected="selected"{/if} value = "m">{#male#}</option>
							<option {if $user.gender == "f"}selected="selected"{/if} value = "f">{#female#}</option>
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
				<label>{#role#}:</label>
				<select name = "role" realname = "{#role#}" required="1" exclude = "-1" id = "roleselect">
					<option value="-1" selected="selected">{#chooseone#}</option>
					{section name = role loop=$roles}
						<option value = "{$roles[role].ID}" id="role{$roles[role].ID}">{$roles[role].name}</option>
					{/section}
				</select>
			</div>
			
			<div class="clear_both_b"></div>
			
			<div class="row">
				<label>&nbsp;</label>
				<div class="butn">
					<button type="submit">{#addbutton#}</button>
				</div>
				<a href = "javascript:blindtoggle('form_member');" class="butn_link"><span>{#cancel#}</span></a>
			</div>

		</fieldset>
	</form>
</div> {*block_in_wrapper end*}