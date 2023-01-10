<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kesihatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;


class DataKesihatanController extends Controller
{



    public function index()
    {

        $kesihatan = DB::table('data_kesihatan')->where('user_id', Auth::id())->get();
        return view('dashboards.users.show-data-kesihatan', compact('kesihatan'));

    }

    public function index2()
    {

        return view('dashboards.admins.kesihatan.admin-data-kesihatan');

    }

    public function index3()
    {

        $kesihatan = Kesihatan::paginate(100);
        return view('dashboards.admins.kesihatan.admin-edit-data-kesihatan', compact('kesihatan'));

    }

    public function editpage($id)
    {
        $kesihatan = Kesihatan::find($id);
        return view('dashboards.admins.kesihatan.edit-data-kesihatan', compact('kesihatan'));
    }

    public function createkesihatan(Request $request)
    {
        $kesihatan = new Kesihatan();
        $user = DB::table('users')->where('id', Auth::id())->first();
        if($request->hasFile('penyakit_img'))
        {
            $file = $request->file('penyakit_img');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/upload/penyakitimage/',$filename);
            $kesihatan->penyakit_img = $filename;
        }
        $kesihatan->rawatan = $request->input('rawatan');
            $kesihatan->rawatan_desc = $request->input('rawatan_desc');
            $kesihatan->darah = $request->input('darah');
            $kesihatan->darah_desc = $request->input('darah_desc');
            $kesihatan->gula = $request->input('gula');
            $kesihatan->gula_desc = $request->input('gula_desc');
            $kesihatan->diabetes = $request->input('diabetes');
            $kesihatan->diabetes_desc = $request->input('diabetes_desc');
            $kesihatan->jantung = $request->input('jantung');
            $kesihatan->jantung_desc = $request->input('jantung_desc');
            $kesihatan->batuk = $request->input('batuk');
            $kesihatan->batuk_desc = $request->input('batuk_desc');
            $kesihatan->kidney = $request->input('kidney');
            $kesihatan->kidney_desc = $request->input('kidney_desc');
            $kesihatan->pembedahan = $request->input('pembedahan');
            $kesihatan->pembedahan_desc = $request->input('pembedahan_desc');
            $kesihatan->penyakit_lain = $request->input('penyakit_lain');
            $kesihatan->penyakit_lain_desc = $request->input('penyakit_lain_desc');
            $kesihatan->user_id = $user->id;
            $kesihatan->user_name = $user->name;
            $kesihatan->save();
            return redirect()->back()->with('success','Data telah berjaya dimuatnaik');
    }

    public function editkesihatanadmin(Request $request, $id)
    {
        $kesihatan = Kesihatan::find($id);
        $kesihatan->rawatan = $request->input('rawatan');
        $kesihatan->rawatan_desc = $request->input('rawatan_desc');
        $kesihatan->darah = $request->input('darah');
        $kesihatan->darah_desc = $request->input('darah_desc');
        $kesihatan->gula = $request->input('gula');
        $kesihatan->gula_desc = $request->input('gula_desc');
        $kesihatan->diabetes = $request->input('diabetes');
        $kesihatan->diabetes_desc = $request->input('diabetes_desc');
        $kesihatan->jantung = $request->input('jantung');
        $kesihatan->jantung_desc = $request->input('jantung_desc');
        $kesihatan->batuk = $request->input('batuk');
        $kesihatan->batuk_desc = $request->input('batuk_desc');
        $kesihatan->kidney = $request->input('kidney');
        $kesihatan->kidney_desc = $request->input('kidney_desc');
        $kesihatan->pembedahan = $request->input('pembedahan');
        $kesihatan->pembedahan_desc = $request->input('pembedahan_desc');
        $kesihatan->penyakit_lain = $request->input('penyakit_lain');
        $kesihatan->penyakit_lain_desc = $request->input('penyakit_lain_desc');
        $kesihatan->update();
        return redirect()->back()->with('success','Data berjaya dikemaskini');




    }

    public function deletekesihatanadmin($id)
    {
        $kesihatan = Kesihatan::find($id);

        $kesihatan->delete();
        return redirect()->back()->with('success','Data berjaya dipadam');
    }



    public function recordsuser(Request $request)
    {
        $kesihatan = DB::table('data_kesihatan')->where('user_id', Auth::id())->get();

        if ($request->ajax()) {

            if ($request->input('start_date') && $request->input('end_date')) {

                $start_date = Carbon::parse($request->input('start_date'));
                $end_date = Carbon::parse($request->input('end_date'));

                if ($end_date->greaterThan($start_date)) {

                    $kesihatan = Kesihatan::whereBetween('created_at', [$start_date, $end_date])->where('user_id', Auth::id())->get();
                } else {
                    $kesihatan = DB::table('data_kesihatan')->where('user_id', Auth::id())->get();
                }
            } else {
                $kesihatan = DB::table('data_kesihatan')->where('user_id', Auth::id())->get();
            }

            return response()->json([
                'kesihatan' => $kesihatan
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
                    $kesihatan = Kesihatan::whereBetween('created_at', [$start_date, $end_date])->get();
                } else {
                    $kesihatan = Kesihatan::latest()->get();
                }
            } else {
                $kesihatan = Kesihatan::latest()->get();
            }

            return response()->json([
                'kesihatan' => $kesihatan
            ]);
        } else {
            abort(403);
        }
    }


}

?>
