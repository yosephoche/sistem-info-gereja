<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\GroupOrganisasi;

class OrganisasiController extends Controller
{
    public function index(Request $request)
    {
        $organisasi = GroupOrganisasi::all();

        return view('pages.organisasi.index', compact('organisasi'));
    }

    public function detail($id)
    {
        $organisasi = GroupOrganisasi::find($id);
        return view('pages.organisasi.detail', compact('organisasi'));
    }
}
