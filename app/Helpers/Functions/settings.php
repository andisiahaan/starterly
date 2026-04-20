<?php

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;
use App\Helpers\MyApp;


if (! function_exists('setting')) {
    /**
     * Get a setting value.
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    function setting(string $key, mixed $default = null): mixed
    {
        $parts = explode('.', $key);
        $section = array_shift($parts);
        $path = implode('.', $parts);

        // Cache Key: settings.{section}
        $cacheKey = "settings.{$section}";
        $ttl = config('cache.ttl', 3600);

        $config = Cache::remember($cacheKey, $ttl, function () use ($section) {
            $setting = Setting::where('section', $section)->first();
            return $setting ? $setting->config : null;
        });

        if (is_null($config)) {
            return $default;
        }

        if (empty($path)) {
            return $config;
        }

        return data_get($config, $path, $default);
    }
}


if(!function_exists('my_app')){

    function my_app($key = null, $default = null){
        $cacheMinutes = config('cache.ttl', 60);
        $myAppInfo = Cache::remember('app_info', $cacheMinutes, function () {
            return [
                'logo' => MyApp::getLogoUrl(),
                'favicon' => MyApp::getFaviconUrl(),
                'name' => setting('main.app_name') ?? config('app.name'),
                'title' => setting('main.app_title') ?? config('app.name'),
                'description' => setting('main.app_description'),
                'keywords' => setting('main.app_keywords'),
                'default_theme' => setting('main.default_theme') ?? 'light',
                'theme' => request()->cookie('theme', setting('main.default_theme') ?? 'light'),
                'app_url' => MyApp::getAppUrl(),
                'api_url' => MyApp::getApiUrl(),
                'admin_url' => MyApp::getAdminUrl(),
            ];
        });
        if(is_null($key)){
            return $myAppInfo;
        }
        return $myAppInfo[$key] ?? $default;
    }

}
