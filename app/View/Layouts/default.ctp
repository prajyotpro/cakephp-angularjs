<!DOCTYPE html>
<html>
<head>
	<title>

	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('bootstrap.min');

		echo $this->fetch('meta');
		echo $this->fetch('css');
	?>
</head>
<body>
	<div class="container">
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>
	</div>
	<?php echo $this->element('sql_dump'); ?>

</body>
<?php
echo $this->Html->script('jquery-2.1.1.min');
echo $this->Html->script('angular.min');
echo $this->fetch('script'); 
?>
</html>
