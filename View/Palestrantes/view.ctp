<div class="grid_8">
        
        <h2> <?php echo h($palestrante['Palestrante']['nome']); ?> </h2>

        <?php
        	$site = $palestrante['Palestrante']['url'];
        ?>

        <h4> <a href="http://<?php echo $site ?>"><?php echo $site; ?></a> </h4>

        <?php echo h($palestrante['Palestrante']['descricao']); ?> 
        


</div>