<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    public function setup()
    {
        return view('setup');
    }

    public function storeSetup(Request $request)
    {
        Session::put('admin_user', $request->username);
        Session::put('admin_pass', $request->password);
        return redirect()->route('login')->with('success', 'Kredensial berhasil diatur!');
    }

    public function login()
    {
        return view('login');
    }

    public function handleLogin(Request $request)
    {
        $storedUser = Session::get('admin_user');
        $storedPass = Session::get('admin_pass');

        if ($request->username === $storedUser && $request->password === $storedPass) {
            Session::put('logged_in', true);
            Session::put('username', $request->username);
            return redirect()->route('dashboard');
        }

        return redirect()->back()->with('error', 'Kredensial salah atau akun belum diatur!');
    }

    public function logout()
    {
        Session::forget(['logged_in', 'username']);
        return redirect()->route('login');
    }

    public function dashboard()
    {
        if (!Session::has('logged_in')) return redirect()->route('login');

        $username = Session::get('username');
        $stats = [
            'active_pcs' => 8,
            'total_billing' => 'Rp 450.000',
            'current_shift' => 'Pagi (08:00 - 16:00)'
        ];

        return view('dashboard', compact('username', 'stats'));
    }

    public function pengelolaan()
    {
        if (!Session::has('logged_in')) return redirect()->route('login');

        $items = [
            ['id' => 1, 'pc_name' => 'PC-01', 'status' => 'Digunakan', 'user' => 'Andi', 'duration' => '02:15:00'],
            ['id' => 2, 'pc_name' => 'PC-02', 'status' => 'Tersedia', 'user' => '-', 'duration' => '00:00:00'],
            ['id' => 3, 'pc_name' => 'PC-03', 'status' => 'Digunakan', 'user' => 'Budi', 'duration' => '01:30:00'],
            ['id' => 4, 'pc_name' => 'PC-04', 'status' => 'Perbaikan', 'user' => '-', 'duration' => '00:00:00'],
            ['id' => 5, 'pc_name' => 'PC-05', 'status' => 'Digunakan', 'user' => 'Citra', 'duration' => '00:45:00'],
            ['id' => 6, 'pc_name' => 'PC-06', 'status' => 'Tersedia', 'user' => '-', 'duration' => '00:00:00'],
            ['id' => 7, 'pc_name' => 'PC-07', 'status' => 'Digunakan', 'user' => 'Dedi', 'duration' => '03:00:00'],
            ['id' => 8, 'pc_name' => 'PC-08', 'status' => 'Digunakan', 'user' => 'Euis', 'duration' => '01:10:00']
        ];

        return view('pengelolaan', compact('items'));
    }

    public function profile()
    {
        if (!Session::has('logged_in')) return redirect()->route('login');

        $username = Session::get('username');
        return view('profile', compact('username'));
    }
}
