<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Valuestore\Valuestore;
use App\Support\Settings;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class SettingController extends Controller
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function index()
    { 
    	$listTimezones = getTimezones();
        $listLang = getLangs();
        $list = getCounties();
        $listCountries = array();
        foreach ($list as $value) {
            $listCountries[$value->alpha2Code] = $value->name;
        }
        return view('dashboard.settings.index', compact('listCountries','listTimezones', 'listLang'));
    }

    public function updateSettings(Request $request, Settings $settings)
    {
         $data = array(
            'name' => Str::ucfirst($request->name),
            'locale' => $request->locale,
            'email' => $request->email,
            'phones' => $request->phones,
            'country' => $request->country,
            'timezone' => $request->timezone,
            'location' => Str::ucfirst($request->location)
         );
         #dd($data);
         $settings->put($data);
         return back()->with('success', 'Updated');
    }
}
