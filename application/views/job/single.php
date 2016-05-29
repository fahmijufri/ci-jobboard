<h2><?php echo $job['title'] ?></h2>

<p><?php echo date('j F Y', strtotime($job['date_created'])) ?></p>
<p>Category : <?php echo $job['cat_name'] ?></p>
<p>Company : <?php echo $job['comp_name'] ?></p>
<p>Description : <?php echo $job['description'] ?></p>

<p>How to apply : <?php echo $job['apply'] ?></p>

Page rendered in <strong>{elapsed_time}</strong> seconds.