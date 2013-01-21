<div class="box home_box1 color1">
    <?php echo $this->Html->link( $this->Html->image('templatemo_services.jpg', array('alt'=> __('Sobre Nós', true), 'border' => '0')), '/sobre-nos', array('target' => false, 'escape' => false)); ?>
</div>

<div class="box home_box1 color2">
    <?php echo $this->Html->link( $this->Html->image('testimonial.jpg', array('alt'=> __('Localização', true), 'border' => '0')), '/localizacao', array('target' => false, 'escape' => false)); ?>
</div>

<div class="box home_box2 color3">
    <div id="social_links">
        <?php echo$this->Html->image('facebook.png', array('id' => 'Facebook'));?>
        <?php echo$this->Html->image('flickr.png', array('id' => 'Flickr'));?>
        <?php echo$this->Html->image('twitter.png', array('id' => 'Twitter'));?>
        <?php echo$this->Html->image('youtube.png', array('id' => 'Youtube'));?>
        <?php echo$this->Html->image('vimeo.png', array('id' => 'Vimeo'));?>
</div>	
</div>

<div class="box home_box1 color4 no_mr">
    <?php echo $this->Html->link( $this->Html->image('contact.jpg', array('alt'=> __('Inscrições', true), 'border' => '0')), '/inscricao', array('target' => false, 'escape' => false)); ?>                    
</div>


<div id="templatemo_footer">
    Copyright 2013 <?php echo $this->Html->link('Assando Sites', 'http://www.assando-sites.com.br', array('target' => '_blank', 'escape' => false)); ?> | Desenvolvido por: <?php echo $this->Html->link('Gui Ricarte', 'mailto:guiricarte@gmail.com');?>
</div>  