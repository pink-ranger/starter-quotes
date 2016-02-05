<?php
class Bingo extends Application 
{
    function __construct() 
    {
        parent::__construct();
    }
    
    function index() 
    {
        $this->data['pagebody'] = 'justone'; // this is the view we want shown

        $record = $this->quotes->get(5);
        $this->data = array_merge($this->data, $record);

        $this->render();
    }
}