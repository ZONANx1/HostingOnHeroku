<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pembelajaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;

class DataPembelajaranController extends Controller
{



    public function index()
    {

        $pembelajaran = DB::table('data_pembelajaran')->where('user_id', Auth::id())->get();
        return view('dashboards.users.show-data-pembelajaran', compact('pembelajaran'));

    }

    public function index2()
    {

        return view('dashboards.admins.pembelajaran.admin-data-pembelajaran');
    }

    public function index3()
    {

        $pembelajaran = Pembelajaran::paginate(100);
        return view('dashboards.admins.pembelajaran.admin-edit-data-pembelajaran', compact('pembelajaran'));

    }

    public function editpage($id)
    {
        $pembelajaran = Pembelajaran::find($id);
        return view('dashboards.admins.pembelajaran.edit-data-pembelajaran', compact('pembelajaran'));
    }


    public function createpembelajaran(Request $request)
    {
        $pembelajaran = new Pembelajaran();
        $user = DB::table('users')->where('id', Auth::id())->first();
        if($request->hasFile('pembelajaran'))
        {
            $file = $request->file('pembelajaran');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/upload/pembelajaranimage/',$filename);
            $pembelajaran->pembelajaran = $filename;
        }

        $pembelajaran->sesi_pembelajaran = $request->input('sesi_pembelajaran');
        $pembelajaran->kategori = $request->input('kategori');
        $pembelajaran->kehadiran = $request->input('kehadiran');
        $pembelajaran->waktu_mula = $request->input('waktu_mula');
        $pembelajaran->waktu_tamat = $request->input('waktu_tamat');
        $pembelajaran->komen = $request->input('komen');
        $pembelajaran->progress = $request->input('progress');
        $pembelajaran->user_id = $user->id;
        $pembelajaran->user_name = $user->name;
        $pembelajaran->save();
        return redirect()->back()->with('success','Data telah berjaya dimuatnaik');

    }

    public function editpembelajaranadmin(Request $request, $id)
    {
        $pembelajaran = Pembelajaran::find($id);
        $pembelajaran->sesi_pembelajaran = $request->input('sesi_pembelajaran');
        $pembelajaran->kategori = $request->input('kategori');
        $pembelajaran->kehadiran = $request->input('kehadiran');
        $pembelajaran->waktu_mula = $request->input('waktu_mula');
        $pembelajaran->waktu_tamat = $request->input('waktu_tamat');
        $pembelajaran->komen = $request->input('komen');
        $pembelajaran->progress = $request->input('progress');
        $pembelajaran->update();
        return redirect()->back()->with('success','Data berjaya dikemaskini');

    }
    public function deletepembelajaranadmin($id)
    {
        $pembelajaran = Pembelajaran::find($id);
        $pembelajaran->delete();
        return redirect()->back()->with('success','Data berjaya dipadam');
    }

    public function recordsuser(Request $request)
    {
     
        if ($request->ajax()) {

            if ($request->input('start_date') && $request->input('end_date')) {

                $start_date = Carbon::parse($request->input('start_date'));
                $end_date = Carbon::parse($request->input('end_date'));

                if ($end_date->greaterThan($start_date)) {
                  
                    $pembelajaran = Pembelajaran::whereBetween('created_at', [$start_date, $end_date])->where('user_id', Auth::id())->get();
                } else {
                    $pembelajaran = DB::table('data_pembelajaran')->where('user_id', Auth::id())->get();
                }
            } else {
                   $pembelajaran = DB::table('data_pembelajaran')->where('user_id', Auth::id())->get();
            }

            return response()->json([
                'pembelajaran' => $pembelajaran
            ]);
        } else {
            abort(403);
        }
    }

    public function recordsadmin(Request $request)
    {
     
        if ($request->ajax()) {

            if ($request->input('start_date') && $request->input('end_date')) {

                $start_date = Carbon::parse($request->input('start_date'));
                $end_date = Carbon::parse($request->input('end_date'));

                if ($end_date->greaterThan($start_date)) {
                    $pembelajaran = Pembelajaran::whereBetween('created_at', [$start_date, $end_date])->get();
                } else {
                    $pembelajaran = Pembelajaran::latest()->get();
                }
            } else {
                $pembelajaran = Pembelajaran::latest()->get();
            }

            return response()->json([
                'pembelajaran' => $pembelajaran
            ]);
        } else {
            abort(403);
        }
    }

}

?>
