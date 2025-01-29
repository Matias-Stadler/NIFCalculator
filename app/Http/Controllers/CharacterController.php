<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    //
    function assignLetterToNumber($numChain)
{
    if (strlen($numChain) != 8) {
        return "Introduce a valid number (needs to have 8 numbers)";
    }

    $mod = (int)$numChain % 23;
    $character = Character::find($mod + 1);

    return $numChain . $character->character;
}
}
