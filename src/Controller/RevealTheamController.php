<?php 
namespace App\Controller;
use App\Controller\AppController;
use Cake\Routing\Router;

/**
 * 
 */
class RevealTheamController extends AppController{
 public $base_url;
	public function initialize()
	{
		$this->base_url= Router::url('/',true);
		parent::initialize();
		$this->viewBuilder()->setLayout("Reveal");
	}
	public function index()
	{
		$this->set('baseurl',"$this->base_url");
        $this->set('title', "index");
		}

	public function about()
	{
		$this->set('baseurl',"$this->base_url");
        $this->set('title', "about");
	}
public function contact()
	{
		$this->set('baseurl',"$this->base_url");
        $this->set('title', "contact");
	}

	public function portfolio()
	{
		$this->set('baseurl',"$this->base_url");
        $this->set('title', "portfolio");
	}

	public function services()
	{
		$this->set('baseurl',"$this->base_url");
        $this->set('title', "services");
	}

	public function teams()
	{
		$this->set('baseurl',"$this->base_url");
        $this->set('title', "teams");
	}

}



?>