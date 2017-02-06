<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hogwarts extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Homepage for our app
	 */
	public function index()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'justone';

		// build the list of authors, to pass on to our view
		$source = $this->quotes->get(6);

		$this->data['who'] = $source['who'];
		$this->data['mug'] = $source['mug'];
		$this->data['href'] = $source['where'];
		$this->data['what'] = $source['what'];

		$this->render();
	}

}
