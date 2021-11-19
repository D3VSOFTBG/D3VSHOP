<?php

use App\User;

function user_count()
{
    return User::all('id')->count();
}
function gravatar($email)
{

}
