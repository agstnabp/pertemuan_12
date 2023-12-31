<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GreetController extends Controller
{
    public function greet(Request $request)
{
 $userData = $request->only([
 'firstname',
 'lastname',
 ]);
 if (empty($userData['firstname']) &&
empty($userData['lastname'])) {
 return new \Exception('Missing data', 404);
 }
 return 'Halo ' . $userData['firstname'] . ' ' .
$userData['lastname'];

}

}
