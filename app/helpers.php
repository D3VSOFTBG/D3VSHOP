<?php

use App\User;

function user_count()
{
    return User::all('id');
}
