<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class Main extends BaseController //controller
{
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger) //initcontroller = konstruktor special od codeigniter
    {
        parent::initController($request,$response,$logger);
    }
    public function index()
    {
        echo view('main_page');
    }

    public function page2(){
    echo view ('page2');
    }
    public function prv(){
        echo view ('prv');
    }
    public function index1(){
        echo view ('index1');
    }
    public function index2(){
        echo view ('index2');
    }
    public function index3(){
        echo view ('index3');
    }
    public function index4(){
        echo view ('index4');
    }
        
}
