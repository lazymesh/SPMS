<div class="block_in_wrapper">
<h3>Add grades</h3>
	<form class="main" method="post" action="managegrade.php?action=edit&amp;id={$project.ID}" {literal}onsubmit="return validateCompleteForm(this);"{/literal}>
		<fieldset>

			<div class="row">
				<label for="grade">Enter grade:</label>
				<input type="text" name="grade" id="grade" required="1" realname="Enter grade" />
			</div>
			<div class="row">
				<label for="descriptions">Descriptions:</label>
                <table cellpadding="0" cellspacing="0" border="0">
                	<tr>
                        <td><label>grades</label></td> <td><label>ranges</label></td> <td><label>descriptions</label></td>
                    </tr>
                	<tr>
                        <td><label>A</label></td> <td><label>90-100</label></td> <td><label>outstanding</label></td>
                    </tr>
			<tr>
                        <td><label>A-</label></td> <td><label>85-89</label></td> <td><label>excellent</label></td>
                    </tr>
			<tr>
                        <td><label>B+</label></td> <td><label>80-84</label></td> <td><label>very good</label></td>
                    </tr>
			<tr>
                        <td><label>B</label></td> <td><label>75-79</label></td> <td><label>good</label></td>
                    </tr>
			<tr>
                        <td><label>B-</label></td> <td><label>70-74</label></td> <td><label>satisfactory</label></td>
                    </tr>
			<tr>
                        <td><label>C+</label></td> <td><label>65-69</label></td> <td><label>poor</label></td>
                    </tr>
			<tr>
                        <td><label>C</label></td> <td><label>60-64</label></td> <td><label>poor</label></td>
                    </tr>
			<tr>
                        <td><label>C-</label></td> <td><label>55-59</label></td> <td><label>very poor</label></td>
                    </tr>
			<tr>
                        <td><label>F</label></td> <td><label>below 55</label></td> <td><label>fail</label></td>
                    </tr>
                 </table>
			</div>
			
			
			<div class="clear_both_b"></div>
			
			<div class="row-butn-bottom">
		<label>&nbsp;</label>
		<button type="submit" onfocus="this.blur();">Submit</button>
		<button type='reset' onclick="blindtoggle('form_grade');toggleClass('grade_butn','grade-active','grade');return false;" onfocus="this.blur();" {if $showhtml != "no"} style="display:none;clear:both;"{/if}>{#cancel#}</button>
	</div>

		</fieldset>
	</form>
</div> {*block_in_wrapper end*}
