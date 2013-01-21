<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
if (Configure::read('debug') == 0):
	throw new NotFoundException();
endif;
App::uses('Debugger', 'Utility');
?>
<div id="home_home">
    <div id="home_about"  class="box">
        <h2>Coding Dojo?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <div class="left">
            <?php echo $this->Html->link( $this->Html->image('palestras.JPG', array('alt'=> __('Palestras', true), 'border' => '0')), '/palestras', array('target' => false, 'escape' => false)); ?>
        </div>
        <div class="right">
            <?php echo $this->Html->link( $this->Html->image('palestrantes.JPG', array('alt'=> __('Palestrantes', true), 'border' => '0')), '/palestrantes', array('target' => false, 'escape' => false)); ?>
        </div>
    </div>

    <div id="home_gallery" class="box no_mr">
            <div id="space_gallery"> 
                <?php echo$this->Html->image('gallery/01.jpg', array('id' => 'image 1'));?>
                <?php echo$this->Html->image('gallery/02.jpg', array('id' => 'image 2'));?>
                <?php echo$this->Html->image('gallery/03.jpg', array('id' => 'image 3'));?>
            </div>
            <div id="space_gallery"> 
                <?php echo$this->Html->image('gallery/04.jpg', array('id' => 'image 4'));?>
                <?php echo$this->Html->image('gallery/05.jpg', array('id' => 'image 5'));?>
                <?php echo$this->Html->image('gallery/06.jpg', array('id' => 'image 6'));?>
            </div>
    </div>
</div>