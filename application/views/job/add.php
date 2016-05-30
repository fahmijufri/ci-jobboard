<?php echo validation_errors(); ?>

<?php echo form_open('job/add'); ?>
	<br>
	<label for="title">Title</label>
	<input type="text" name="title" id="title"> <br><br>

	<label for="description">Description</label>
	<textarea name="description" id="desription" cols="30" rows="10"></textarea> <br><br>

	<label for="apply">How to Apply</label>
	<textarea name="apply" id="apply" cols="30" rows="10"></textarea> <br><br>

	<label for="category">Category</label>
	<select name="category" id="category" style="width:200px;">
		<option value="0">SELECT CATEGORY</option>
		<?php foreach ($category as $cat) { ?>
			<option value="<?php echo $cat['category_id'];?>"><?php echo $cat['name'];?></option>
		<?php } ?>
	</select> <br><br>

	<label for="job_type">Job Type</label>
	<select name="job_type" id="job_type" style="width:150px;">
		<option value="0">SELECT JOB TYPE</option>
		<?php foreach ($job_type as $type) { ?>
			<option value="<?php echo $type['job_type_id'];?>"><?php echo $type['type'];?></option>
		<?php } ?>
	</select> <br><br>
	<input type="submit" value="SUBMIT">
<?php echo form_close(); ?>