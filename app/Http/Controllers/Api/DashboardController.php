<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use Config;
use DB;

use App\Models\UserProfile;
use App\Models\Role;
use App\Models\UserRole;
use App\Models\RoleGroup;

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

        $data = $this->_dashboard_data($user);

        return response()->json($data, 200);
    }

    public function _dashboard_data($user)
    {
        $user_role = $user->user_role();
        $role = $user_role->first()->role;
        $group = $user_role->first()->group;

        switch ($role->name) {
            case Role::SUPERADMIN:
                return $this->superadmin_data();
                break;

            case Role::ADMIN:
                return $this->_dashboard($user->profile->wilayah_id, $group->name);
                break;

            case Role::PENGURUS_OIG:
                return $this->_oig($user->profile->jemaat_id);
                break;

            case Role::PENGURUS_OIG_KLASIS:
                return $this->_oig_klasis($user->profile->klasis_id);
                break;

            default:
                break;
        }
    }

    public function superadmin_data()
    {
        $data = [];
        $user = UserProfile::with('pekerjaan')->whereHas('pekerjaan')->get();
        $data['jemaat'] = UserProfile::all()->count();
        $data['pria'] = UserProfile::where('jenis_kelamin', 'Pria')->count();
        $data['wanita'] = UserProfile::where('jenis_kelamin', 'Wanita')->count();

        $data['pekerjaan'] = $user->groupBy('pekerjaan.name')->map(function ($pekerjaan) {
            return $pekerjaan->count();
        });

        return $data;
    }

    public function _dashboard(int $id_wilayah, $group)
    {
        // - Jumlah Jemaat/User
        // - Jumlah Laki
        // - Jumlah perempuan
        // - Jumlah jemaat by pekerjaan
        // - Jumlah anggota organisasi

        $user = UserProfile::with('pekerjaan')->whereHas('pekerjaan');
        switch ($group) {
            case RoleGroup::WILAYAH:
                $user = $user->where('wilayah_id', $id_wilayah)->get();
                break;

            case RoleGroup::KLASIS:
                $user = $user->where('klasis_id', $id_wilayah)->get();
                break;

            case RoleGroup::JEMAAT:
                $user = $user->where('jemaat_id', $id_wilayah)->get();
                break;

            default:
                break;
        }

        $total = $user->count();
        $total_pria = $user->where('jenis_kelamin', 'Pria')->count();
        $total_wanita = $user->where('jenis_kelamin', 'Wanita')->count();

        $total_user_by_pekerjaan = $user->groupBy('pekerjaan.name')->map(function ($pekerjaan) {
            return $pekerjaan->count();
        });

        $data = [];
        $data['jemaat'] = $total;
        $data['pria'] = $total_pria;
        $data['wanita'] = $total_wanita;
        $data['pekerjaan'] = $total_user_by_pekerjaan;

        return $data;

    }

}
