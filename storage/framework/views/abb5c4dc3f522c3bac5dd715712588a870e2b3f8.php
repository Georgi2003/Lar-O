<!DOCTYPE HTML>  
<html>	
	<head>
		<title>Магазин</title>
		<link rel = "stylesheet" href = "css/default.css"></link>
		
		<link href = "img/icon.jpg" rel = "shortcut icon" type="image/x-icon">
	</head>

	<body>
		<div class = "header">
			<h1><?php echo e($nameTitle); ?></h1>
		</div>  
		<ul>		
			<li style = "float: right;"><a href = "index.php">Изход</a></li>
			<li style = "float: right;"><a href = "<?php echo e(url('account')); ?>">Профил</a></li>
			<li style = "float: right;"><a href = "rating.php">Рейтинг</a></li>
			<li style = "float: right;"><a href = "info.php">Информация</a></li>
		</ul>
	    <div class="container">
	        <?php echo $__env->yieldContent('log'); ?>
	    </div>
	</body>
</html><?php /**PATH C:\xampp\htdocs\laravel\Laravel-master\resources\views/layout/default.blade.php ENDPATH**/ ?>