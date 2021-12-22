<?php

namespace App\Http\Controllers;

use App\Models\Passport;
use App\Models\User;
use Illuminate\Http\Request;

class ERMController extends Controller
{
    //

    public function display()
    {
        // eager loading 
        $user = User::find(1);
        echo $user->passport->passport_no;

        echo '<br/>';
        $passport = Passport::find(1);
        echo $passport->user->name;
    }
}
