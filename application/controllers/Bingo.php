<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Bingo extends Application
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // loads justone
        $this->data['pagebody'] = 'justone';
        // gets the quote
        $source = $this->quotes->get(5);
        // merge the records to data array
        $this->data = array_merge($this->data, $source);
        $this->render();
    }
}