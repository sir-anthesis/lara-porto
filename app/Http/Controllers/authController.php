<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Laravel\Socialite\Facades\Socialite;

class authController extends Controller
{
    function index()
    {
        return view('auth.index');
    }
    function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    function callback()
    {
        $user = Socialite::driver('google')->user();

        $id = $user->id;
        $email = $user->email;
        $name = $user->name;
        $avatar = $user->avatar;

        $cek = User::where('email', $email)->count();
        if ($cek > 0) {
            $avatar_file = $id . ".jpg";
            $file_content = file_get_contents($avatar);
            File::put(public_path("dashboardTemp/images/faces/$avatar_file"), $file_content);

            $user = User::updateOrCreate(
                ['email' => $email],
                [
                    'name' => $name,
                    'google_id' => $id,
                    'avatar' => $avatar_file
                ],
            );
            Auth::login($user);
            return redirect()->route('halaman.index');
        } else {
            return redirect()->to('auth')->with('error', 'Akun yang Anda masukan belum terdaftar sebagai Admin.');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->to('auth');
    }
}
