<?php 
namespace Acme;

class Kindle implements eReaderInterface {
    public function turnOn()
    {
        var_dump('Turn On');
    }

    public function nextPage()
    {
        var_dump('next page');        
    }
}