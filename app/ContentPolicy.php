<?php
namespace App;
use Spatie\Csp\Directive;

use Spatie\Csp\Policies\Basic;

class ContentPolicy extends Basic
{
    public function configure()
    {
        parent::configure();

        // $this->addDirective(Directive::STYLE, 'fonts.googleapis.com') 
        // ->addDirective(Directive::DEFAULT, 'fonts.gstatic.com');

        // $this->addDirective(Directive::DEFAULT, 'www.facebook.com');

        // $this->addDirective(Directive::DEFAULT, 'https://*');
       
        // $this->addDirective(Directive::DEFAULT, 'http://127.0.0.1:8000/');
        
    }
}