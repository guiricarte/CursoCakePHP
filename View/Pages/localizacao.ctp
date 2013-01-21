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

<div id="home_localizacao" class="box">
    <h2>Localiza&ccedil;&atilde;o</h2>
    <p><iframe width="800" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=Rua+Assis+Figueiredo,+Po%C3%A7os+de+Caldas+-+Minas+Gerais&amp;aq=0&amp;oq=assis+fi&amp;sll=-21.820472,-46.544616&amp;sspn=0.314262,0.591202&amp;t=v&amp;ie=UTF8&amp;hq=&amp;hnear=R.+Assis+Figueiredo+-+Po%C3%A7os+de+Caldas+-+Minas+Gerais,+37701-000&amp;z=14&amp;ll=-21.787554,-46.566135&amp;output=embed"></iframe><br /><small></small></p>
</div>