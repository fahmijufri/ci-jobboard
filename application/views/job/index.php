<h1>Job list</h1>
<a href="<?php echo site_url('job/add');?>">Post a Job</a>
<?php foreach ($job_list as $jobs) { ?>
	<h2>
		<a href="<?php echo site_url('job/view/'.$jobs['slug']); ?>">
			<?php echo $jobs['title']; ?>
		</a>
	</h2>
	<p><?php echo $jobs['description']; ?></p>
	
<?php } ?>