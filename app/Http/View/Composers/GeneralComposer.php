<?php

namespace App\Http\View\Composers;

use App\Models\User\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class GeneralComposer
{
    public function compose(View $view)
    {
        $user = Auth::user();
        $roleId = $user ? $user->role_id : 0;

        switch ($roleId) {
            case Role::USER:
                $view->with('user_role', 'user');
                break;
            case Role::ADMIN:
                $view->with('user_role', 'admin');
                break;
            default:
                $view->with('user_role', 'guest');
        }
        $view->with("user", $user);
    }
}
