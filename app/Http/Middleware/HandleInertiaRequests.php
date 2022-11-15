<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;
use Tightenco\Ziggy\Ziggy;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determine the current asset version.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function version(Request $request)
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed[]
     */
    public function share(Request $request)
    {
        $toast = null;
        if ($request->session()->has('errors')) {
            $toast = [
                'title'      => 'Verifique os erros.',
                'message'    => null,
                'type'       => 'warning',
                'alwaysShow' => false
            ];
        } else {
            $toast = $request->session()->get('toast', null);
        }

        return array_merge(parent::share($request), [
            'auth' => [
                'user' => $request->user(),
                'lodge' => isset($request->user()->lodge) ? $request->user()->lodge : '',
            ],
            'ziggy' => function () use ($request) {
                return array_merge((new Ziggy)->toArray(), [
                    'location' => $request->url(),
                ]);
            },
            'toast' => $toast,
        ]);
    }
}
