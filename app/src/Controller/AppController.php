<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\EventInterface;

class AppController extends Controller {
  public function initialize(): void {
    parent::initialize();

    $this->loadComponent('Flash');
    $this->loadComponent('RequestHandler');
  }

  public function beforeFilter(EventInterface $event) {
    parent::beforeFilter($event);
  }
}

