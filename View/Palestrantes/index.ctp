<h2>Palestrantes</h2>
<table width="800px">
    <tr id="tabela">
        <th>Nome</th>
        <th>Descrição</th>
        <th>URL</th>
    </tr>
    <?php foreach ($palestrantes as $palestrante): ?>
    <tr>
        <td><?php echo $palestrante['Palestrante']['nome']; ?></td>
        <td><?php echo $palestrante['Palestrante']['descricao']; ?></td>
        <?php
        	$site = $palestrante['Palestrante']['url'];
        ?>
        <td><a href="http://<?php echo $site ?>"><?php echo $site; ?></a></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($palestrante); ?>
</table>