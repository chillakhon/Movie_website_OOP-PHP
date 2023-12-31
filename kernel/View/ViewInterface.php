<?php

namespace App\kernel\View;

interface ViewInterface
{
    public function page(string $name, array $data = []):void;

    public function component(string $name, array $data = []):void;
}