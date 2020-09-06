<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    const X_CURRENT_LOCATION_LATITUDE = "X-CURRENT-LOCATION-LATITUDE";
    const X_CURRENT_LOCATION_LONGITUDE = "X-CURRENT-LOCATION-LONGITUDE";

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
