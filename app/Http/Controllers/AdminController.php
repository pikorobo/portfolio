<?php

namespace App\Http\Controllers;

use App\Services\AdminServices;
use Illuminate\Http\Request;
use App\Http\Requests\AdminLoginValidation;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function login(AdminLoginValidation $request)
    {
        $admin_service = new AdminServices();

        $login_result = $admin_service->login($request);

        if (!empty($login_result)) {
            return view('admin.index', ['error_message' => $login_result]);
        }

        return redirect(route('posts.create'));
    }

    public function showTop(Request $request)
    {
        $admin_email = $request->session()->get('admin_email');
        if (!$admin_email) {
            return redirect(route('admin_index'));
        }

        return view('posts.create');
    }
}