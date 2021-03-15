<?php

namespace App\Http\Controllers;

use App\Services\SocialService;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
	/**
	 * @return \Symfony\Component\HttpFoundation\RedirectResponse
	 */
	public function init()
	{
		return Socialite::driver('vkontakte')->redirect();
	}
	public function callback(SocialService $service)
	{
		$user = Socialite::driver('vkontakte')->user();
		$authUser = $service->updateUser($user);
		if($authUser) {
			return redirect()->route('account');
		}

		throw new \Exception("User not found");
	}
}
