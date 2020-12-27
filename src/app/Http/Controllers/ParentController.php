<?php

namespace App\Http\Controllers;

use App\Auth\Checker;
use Illuminate\Http\Request;

class ParentController extends Controller
{
    protected $baseUri, $source, $headers;

    public function __construct()
    {
        $this->baseUri = env("MILKYWAY_API_BASE_URL");
        $this->source = env("SOURCE");
        $this->headers = [
            "Content-Type" => "application/json",
            "source" => $this->source
        ];
    }
}
