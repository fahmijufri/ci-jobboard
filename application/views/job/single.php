<h2><?php echo $job['title'] ?></h2>
<h3><a href="<?php echo site_url('job/edit/'.$job['id']); ?>">edit</a></h3>
<p><?php echo date('F j Y', strtotime($job['date_created'])) ?></p>
<p>Category : <?php echo $job['cat_name'] ?></p>
<p>Company : <?php echo $job['comp_name'] ?></p>
<p>Description : <?php echo $job['description'] ?></p>

<p>How to apply : <?php echo $job['apply'] ?></p>

Page rendered in <strong>{elapsed_time}</strong> seconds.