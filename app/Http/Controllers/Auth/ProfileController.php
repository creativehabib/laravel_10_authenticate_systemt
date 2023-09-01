<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Manager\ImageManager;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.profile');
    }

    /**
     * @param User $user
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(User $user, Request $request): RedirectResponse
    {
        $profile_data = $request->except('image');

        if ($request->has('image')){
            $file = $request->file('image');
            $width = 150;
            $height = 150;
            $name = Str::slug($request->input('name'));
            $path = User::PROFILE_IMG_PATH;
            if (!empty($user->image)){
                ImageManager::deleteImage(User::PROFILE_IMG_PATH, $user->image);
            }
            $profile_data['image'] = ImageManager::uploadImage($name,$width, $height, $path, $file);
        }
        $user->update($profile_data);

        return redirect()->route('dashboard')->with('Profile updated successfully!');
    }
}
