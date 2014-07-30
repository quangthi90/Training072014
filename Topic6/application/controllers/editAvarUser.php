<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Homepage - Show Header Homepage
 * @author: SalmDo
 * @param: none
 * @return: template home
 */
class EditAvarUser extends CI_Controller {
	public function index()
	{
		// load data for content

		// load Controller Header
		include_once(APPPATH.'controllers/common/header.php');
    	$clsHeader = new Header();
		$clsHeader->index();
		
		// load Controller Left
		include_once(APPPATH.'controllers/common/left.php');
    	$clsLeft = new Left();
		$clsLeft->index();

		// content edit avatar user
		include_once(APPPATH.'controllers/account/avatar.php');
    	$clsEditAvar = new avatar();
		$clsEditAvar->index();


		// load Controller Footer
		include_once(APPPATH.'controllers/common/footer.php');
    	$clsFooter = new Footer();
		$clsFooter->index();
	}
}
?>