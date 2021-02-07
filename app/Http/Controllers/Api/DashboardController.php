<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use Config;

use App\Models\UserProfile;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $user = Auth::user();
        $user_role = $user->user_role();
        $role = $user_role->first()->role;

        // dd(Config::get('constants.role.SUPERADMIN'));

        $data = $this->get_dashboard_data($role->name);

        return response()->json($data, 200);
    }

    public function get_dashboard_data(String $role = null)
    {
        switch ($role) {
            case Config::get('constants.role.SUPERADMIN'):
                return $this->superadmin_data();
                break;

            default:
                break;
        }
    }

    public function superadmin_data()
    {
        $data = [];
        $data['jemaat'] = UserProfile::all()->count();
        $data['pria'] = UserProfile::where('jenis_kelamin', 'Pria')->count();
        $data['wanita'] = UserProfile::where('jenis_kelamin', 'Wanita')->count();
        // $data['pekerjaan'] = UserProfile::all()->count();

        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
