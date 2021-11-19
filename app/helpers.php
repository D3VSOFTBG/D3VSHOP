<?php

use App\User;

function user_count()
{
    return User::all('id')->count();
}
function gravatar($email)
{
    return "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) );
}
