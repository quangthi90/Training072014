<?php
/**
 * Common Footer - Show Footer for template
 * @author: Bommer<lqthi.khtn@gmail.com>
 * @param: none
 * @return: template Footer
 */
class Footer extends CI_Controller {
	public function index()
	{
		$this->load->view('template/footer.php');
	}
}
?>