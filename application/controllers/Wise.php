<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Wise extends Application
{
    public function Bingo()
    {
        $record = $this->quotes->get('6');
        $this->data= array_merge($this->data,$record);
        $this->data['pagebody'] = 'justone';
        $this->render();
    }
}