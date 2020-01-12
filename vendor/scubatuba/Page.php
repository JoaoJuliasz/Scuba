<?php

namespace Scubatuba;

use Rain\Tpl;

class Page
{
    private $tpl;
    private $options = [];
    

    public function __construct($tpl_dir = "/views/")
    {
        //caso passe um parametro em opts e de conflito com defaults, vai prevalecer o opts, juntando
        //as duas e mesclando em opitions
        $config = array(
            "tpl_dir"  => $_SERVER["DOCUMENT_ROOT"] . $tpl_dir,
            "cache_dir"  => $_SERVER["DOCUMENT_ROOT"] . "/views-cache/"
        );

        Tpl::configure($config);
        $this->tpl = new Tpl;


    //   $this->tpl->draw("header");
    }

    public function setTpl($name, $returnHtml = false)
    {
        
       return $this->tpl->draw($name, $returnHtml);
    }

    // public function __destruct()
    // {
    //     $this->tpl->draw("footer");
    // }
}
