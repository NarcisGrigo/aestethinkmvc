<?php

namespace Controller;

use Controller\BaseController;

class AdminController extends BaseController
{
    public function admindashboard()
    {
        return view('admin.index');
    }
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
    public function profile()
    {
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.admin_profile_view', compact('adminData'));
    }
}