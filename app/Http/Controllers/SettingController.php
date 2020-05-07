<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Support\Countries;
use App\Support\Timezones;
use App\Support\LanguagesList;

class SettingController extends Controller
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function index()
    { 
    	$countries = new Countries();
        $listTimezones = array_flip(Timezones::getAll());
        $listLang = LanguagesList::getAll();
        $list = $countries->getList();
        $listCountries = array();
        foreach ($list as $value) {
            $listCountries[$value->alpha2Code] = $value->name;
        }
        return view('dashboard.settings.index', compact('listCountries','listTimezones', 'listLang'));
    }

    public function updateSettings()
    {
    	//
    }
}
