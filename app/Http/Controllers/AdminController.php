<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Pembelajaran;
use App\Models\Kesihatan;
use Illuminate\Support\Facades\File;
use Illuminate\Pagination\Paginator;

class AdminController extends Controller
{

    function index()
    {



        $picture = User::where('picture');
        $total = User::count();
        $total_kesihatan = Kesihatan::count();
        $total_pembelajaran = Pembelajaran::count();


        return view('dashboards.admins.index', [
            'total' => $total,
            'total_kesihatan' => $total_kesihatan,
            'total_pembelajaran' => $total_pembelajaran,
            'picture' => $picture
        ], );
    }

    function profile()
    {
        return view('dashboards.admins.profile');
    }


    public function data_pengguna()
    {

        return view('dashboards.admins.pengguna.admin-data-pengguna');

    }

    public function index3()
    {

        $user = User::paginate(5);
        return view('dashboards.admins.pengguna.admin-edit-data-pengguna', compact('user'));

    }
    public function edituseradmin(Request $request, $id)
    {
        $user = User::find($id);
        if ($request->hasFile('picture')) {
            $path = 'users/images/' . $user->picture;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('picture');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('users/images/', $filename);
            $user->picture = $filename;
        }
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->age = $request->input('age');
        $user->tinggi = $request->input('tinggi');
        $user->berat = $request->input('berat');

        $user->update();
        return redirect()->back()->with('success', 'Data berjaya dikemaskini');

    }
    public function deleteuseradmin($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('success', 'Data berjaya dipadam');
    }

    public function editpage($id)
    {
        $user = User::find($id);
        return view('dashboards.admins.pengguna.edit-data-pengguna', compact('user'));
    }

    function updateInfo(Request $request)
    {

        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . Auth::user()->id,

        ]);

        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        } else {
            $query = User::find(Auth::user()->id)->update([
                'name' => $request->name,
                'email' => $request->email,

            ]);

            if (!$query) {
                return response()->json(['status' => 0, 'msg' => 'Something went wrong.']);
            } else {
                return response()->json(['status' => 1, 'msg' => 'Your profile info has been update successfuly.']);
            }
        }
    }

    function updatePicture(Request $request)
    {
        $path = 'users/images/';
        $file = $request->file('admin_image');
        $new_name = 'UIMG_' . date('Ymd') . uniqid() . '.jpg';

        //Upload new image
        $upload = $file->move(public_path($path), $new_name);

        if (!$upload) {
            return response()->json(['status' => 0, 'msg' => 'Something went wrong, upload new picture failed.']);
        } else {
            //Get Old picture
            $oldPicture = User::find(Auth::user()->id)->getAttributes()['picture'];

            if ($oldPicture != '') {
                if (\File::exists(public_path($path . $oldPicture))) {
                    \File::delete(public_path($path . $oldPicture));
                }
            }

            //Update DB
            $update = User::find(Auth::user()->id)->update(['picture' => $new_name]);

            if (!$upload) {
                return response()->json(['status' => 0, 'msg' => 'Something went wrong, updating picture in db failed.']);
            } else {
                return response()->json(['status' => 1, 'msg' => 'Your profile picture has been updated successfully']);
            }
        }
    }

    function changePassword(Request $request)
    {
        //Validate form
        $validator = \Validator::make($request->all(), [
            'oldpassword' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (!\Hash::check($value, Auth::user()->password)) {
                        return $fail(__('The current password is incorrect'));
                    }
                },
                'min:8',
                'max:30'
            ],
            'newpassword' => 'required|min:8|max:30',
            'cnewpassword' => 'required|same:newpassword'
        ], [
                'oldpassword.required' => 'Enter your current password',
                'oldpassword.min' => 'Old password must have atleast 8 characters',
                'oldpassword.max' => 'Old password must not be greater than 30 characters',
                'newpassword.required' => 'Enter new password',
                'newpassword.min' => 'New password must have atleast 8 characters',
                'newpassword.max' => 'New password must not be greater than 30 characters',
                'cnewpassword.required' => 'ReEnter your new password',
                'cnewpassword.same' => 'New password and Confirm new password must match'
            ]);

        if (!$validator->passes()) {
            return response()->json(['status' => 0, 'error' => $validator->errors()->toArray()]);
        } else {

            $update = User::find(Auth::user()->id)->update(['password' => \Hash::make($request->newpassword)]);

            if (!$update) {
                return response()->json(['status' => 0, 'msg' => 'Something went wrong, Failed to update password in db']);
            } else {
                return response()->json(['status' => 1, 'msg' => 'Your password has been changed successfully']);
            }
        }
    }

    public function recordsadmin(Request $request)
    {

        if ($request->ajax()) {

            if ($request->input('start_date') && $request->input('end_date')) {

                $start_date = Carbon::parse($request->input('start_date'));
                $end_date = Carbon::parse($request->input('end_date'));

                if ($end_date->greaterThan($start_date)) {

                    $user = User::whereBetween('created_at', [$start_date, $end_date])->get();
                } else {
                    $user = User::latest()->get();
                }
            } else {
                $user = User::latest()->get();
            }

            return response()->json([
                'user' => $user
            ]);
        } else {
            abort(403);
        }
    }

}
