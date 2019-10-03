<?php


namespace App\Http\Actions\Front\Selfcare;


use App\Http\Actions\Action;

class IndexAction extends Action
{
    public function __invoke()
    {
        dd('logged');
    }
}
