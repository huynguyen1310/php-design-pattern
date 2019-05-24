<?php 
namespace Acme;

class Nook implements eReaderInterface {
    public function turnOn()
    {
        var_dump('turn on nook');
    }

    public function nextPage()
    {
        var_dump('nook next page');
    }
}