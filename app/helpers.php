<?php

use App\RoleModel;
use App\User;

function user_count()
{
    return User::all('id')->count();
}
function gravatar($email)
{
    return "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) );
}
function role_name($id)
{
    return RoleModel::where('id', $id)->get('name')->pluck('name')->first();
}
