<?php

namespace App\Middleware;

use App\kernel\Middleware\AbstractMiddleware;

class GuestMiddleware extends AbstractMiddleware
{
    public function handle(): void
    {
        if ($this->auth->check()){
            $this->redirect->to('home');
        }
    }
}