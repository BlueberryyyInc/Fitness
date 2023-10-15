<?php

namespace App\Controller;

use App\Controller\AppController;

class PrivacyController extends AppController
{

    public function initialize(): void
    {
        parent::initialize();
        $this->Authentication->allowUnauthenticated(['index', 'about', 'privacy']);
    }

    public function index()
    {
        $this->layout = 'mylayout';
    }
}

