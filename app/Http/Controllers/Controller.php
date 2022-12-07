<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // ALL CRUD laravel for vcard controller
    public function index()
    {
        $vcards = $this->allVcards();
        if($vcards->count() > 0) {
            return view('vcard.index', compact('vcards'));
        } else {
            return view('welcome', ['errors' => [1 => 'No vcards found !']]);
        }
    }



}
