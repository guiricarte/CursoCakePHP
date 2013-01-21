<?php
if (Configure::read('debug') == 0):
	throw new NotFoundException();
endif;
App::uses('Debugger', 'Utility');
?>
<div id="home_incricoes" class="box">
    <h2>Inscrição</h2>
    <div class="half left">
        <h4>Participe agora mesmo de:</h4>
        - Reuni&otilde;es<br />
        - Palestras;<br />
        - Coffe Break;<br />
        - e ainda concorrer&aacute; a um IPAD 3;<br />
        <strong>INSCREVA-SE AGORA MESMO !</strong><br />
        <br />
    </div>
    <div class="half right">
        <div id="contact_form">
            <?php echo $this->Form->create('Inscricao', array('div' => 'inscricao')); ?>
            <div class="left"> <?php echo $this->Form->input('nome', array('div' => 'inscricao','class' => 'input_field')); ?></div>
            <div class="right"> <?php echo $this->Form->input('telefone', array('div' => 'inscricao', 'class' => 'input_field')); ?></div>
            <div class="left"> <?php echo $this->Form->input('email', array('div' => 'inscricao', 'class' => 'input_field')); ?></div>
            <div class="right"> <?php echo $this->Form->input('endereco', array('label'=>'Endereço', 'div' => 'inscricao', 'class' => 'input_field')); ?></div>
            <div class="te"><?php echo $this->Form->end('Inscrever', array('div' => 'inscricao')); ?></div>
        </div>
    </div> 
</div>   
<div class="clear h20"></div>