<?php
    $cakeDescription = __d('cake_dev', 'F.C.D - Festival Coding Dojo');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="pt-br" xmlns="http://www.w3.org/1999/xhtml">
<meta charset="utf-8" />	
<head>
    <?php echo $this->Html->charset(); ?>

    <title>
        <?php echo $cakeDescription ?>
    </title>
    <?php
        echo $this->Html->meta('icon');
        echo $this->Html->css('templatemo_style');
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
    ?>
</head>
<body>
<div id="templatemo_header">
    <div id="site_title">
        <h2><?php echo $this->Html->link('F.C.D - Festival Coding Dojo', '/home'); ?></h2>
    </div>
</div>   
    <div id="templatemo_main">
        <div id="content"> 
            <div id="home" class="section">		
                <?php echo $this->Session->flash(); ?>
                <?php echo $this->fetch('content'); ?>
		<?php echo $this->element('menu'); ?>
            </div>                            
        </div>
    </div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>