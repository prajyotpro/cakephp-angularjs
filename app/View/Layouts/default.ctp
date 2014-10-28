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
<body ng-app="postApp">
	<div class="container">
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>
	</div>
</body>
<?php
	echo $this->Html->script('jquery-2.1.1.min');
	echo $this->Html->script('angular_lib/angular.min');
	echo $this->Html->script('angular_lib/angular-route.min');
	echo $this->Html->script('angular_lib/angular-resource.min');
	echo $this->Html->script('posts_module');
	echo $this->Html->script('controller/postController');
	echo $this->fetch('script'); 
?>
</html>
