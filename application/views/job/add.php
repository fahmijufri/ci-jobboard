<?php echo validation_errors(); ?>

<?php echo form_open(); ?>

	<label for="title">Title</label>
	<input type="text" name="title" id="title"> <br><br>

	<label for="description">Description</label>
	<textarea name="description" id="desription" cols="30" rows="10"></textarea> <br><br>

	<label for="apply">How to Apply</label>
	<textarea name="apply" id="apply" cols="30" rows="10"></textarea> <br><br>

	<label for="category">Category</label>
	<select name="category" id="category" style="width:200px;">
		<option value="">SELECT CATEGORY</option>
	</select> <br><br>

	<label for="job_type">Job Type</label>
	<select name="job_type" id="job_type" style="width:150px;">
		<option value="">SELECT JOB TYPE</option>
	</select> <br><br>
	<input type="submit" value="SUBMIT">
<?php echo form_close(); ?>