<?php

namespace App\Services;

class AdminServices extends BaseServices
{
    public function login($request)
    {
        $admin_email = $request->input('email');
        $admin_password = $request->input('password');

        if ($admin_email !== config('admin.admin_email')) {
            return 'メールアドレスが違います。';
        }
        else if ($admin_password !== config('admin.admin_password')) {
            return 'パスワードが違います。';
        }

        $request->session()->put('admin_email', $admin_email);

        return;
    }
}