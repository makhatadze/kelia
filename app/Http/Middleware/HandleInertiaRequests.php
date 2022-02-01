<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function version(Request $request)
    {
        return parent::version($request);
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return string
     */
    public function rootView(Request $request)
    {
        if (count($request->segments()) && in_array('admin',$request->segments())) {
            return 'admin';
        }
        return 'app';
    }

    /**
     * Defines the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function share(Request $request)
    {
        return array_merge(parent::share($request), [
            //Flash Messages
            'flash' => [
                'message' => fn () => $request->session()->get('message'),
                'toastr' => fn () => $request->session()->get('toastr')
            ]
        ]);
    }
}
