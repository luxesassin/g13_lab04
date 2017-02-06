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
		$this->data['pagebody'] = 'homepage';

		// build the list of authors, to pass on to our view
		$source = $this->quotes->all();
		$authors = array ();
		foreach ($source as $record)
		{
			$authors[] = array ('who' => $record['who'], 'mug' => $record['mug'], 'href' => $record['where']);
		}
		$this->data['authors'] = $authors;

		$this->render();
	}

    public function shucks()
    {
        // this is the view we want shown
        $this->data['pagebody'] = 'justone';

        // build the list of authors, to pass on to our view
        $source = $this->quotes->get(2);

        $this->data['who'] = $source['who'];
        $this->data['mug'] = $source['mug'];
        $this->data['href'] = $source['where'];
        $this->data['what'] = $source['what'];

        $this->render();
    }

    public function random()
    {
        $this->data['pagebody'] = 'homepage';
        // build the list of authors, to pass on to our view
        $source = $this->quotes->all();
        $authors = array ();
        $authorcount = count($source);
        $random = rand() % $authorcount;
        $authors[] = array ('who' => $source[$random]['who'], 'what' => $source[$random]['what'], 'mug' => $source[$random]['mug'], 'href' => $source[$random]['where']);
        $this->data['authors'] = $authors;
        $this->render();
    }


}
