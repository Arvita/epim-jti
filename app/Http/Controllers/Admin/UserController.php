<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\User,
    DataTables,
    Validator,
    Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        
        $s_user = 'active';
        return view('admin.pages.user.index', compact('s_user'))->render();
    }

    public function data()
    {
        $data = User::select('users.name','users.email','users.created_at','users.updated_at','users.event','users.role','users.id')
        ->latest()
        ->get();
        // var_dump($data);die();
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($mn) {
                return
                    '<div class="form-button-action"><button type="button" data-url="' . url('admin/user/' . Crypt::encrypt($mn->id)) . '/edit" data-toggle="tooltip" title="" class="ajax_modal btn btn-warning" data-original-title="Edit"><i class="fa fa-edit"></i></button> ' .
                    '<button type="button" data-url="' . url('admin/user/' . Crypt::encrypt($mn->id)) . '/conf" data-toggle="tooltip" title="" class="ajax_modal_popup btn btn-danger " data-original-title="Remove"><i class="fas fa-trash-alt"></i></button></div>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function create()
    {
        $manage_user = null;
        $event = null;
        return view('admin.pages.user.create', compact('manage_user','event'));
    }
    public function store(Request $request)
    {
        if ($request->ajax() || $request->wantsJson()) {
            $validator = Validator::make($request->all(), [
                'name' => 'required|min:2',
                'email' => 'required|max:255|email|unique:users',
                'password' => 'min:8|required_with:password_again|same:password_again',
                'password_again' => 'min:8',
                'role' => 'required'

            ]);

            if ($validator->fails()) return response()->json(['stat' => false, 'msg' => $this->getMessage('insert.failed')]);

            $user = new User;
            $user->name = strip_tags($request->input('name'));
            $user->email = strip_tags($request->input('email'));
            $user->role = strip_tags($request->input('role'));
            $user->password = bcrypt($request->input('password'));
            if ($request->input('role')=='admin') {
                $user->event = 'admin';
            } else {
                $user->event = strip_tags($request->input('event'));            
            }
            $user->save();
            return response()->json(['stat' => true, 'msg' => $this->getMessage('insert.success')]);
        }
        return redirect('/admin/user');
    }
    public function edit($id)
    {
        $id = Crypt::decrypt($id);        
        $manage_user = User::find($id);
        if ($manage_user['role']!='admin') {
            $event = 'event_edit';
        } else {
            $event = 'event';
        }
        $key = Crypt::encrypt($id);
        return ($manage_user) ? view('admin.pages.user.create', compact('manage_user', 'id', 'key','event')) : $this->showModalError();
    }
    public function update($id, Request $request)
    {
        if ($request->ajax() || $request->wantsJson()) {
            $validator = Validator::make($request->all(), [
                'name' => 'required|min:2',
                'email' => 'required|max:255|email|',
                'role' => 'required'
            ]);

            if ($validator->fails()) return response()->json(['stat' => false, 'msg' => $validator->errors()]);

            $id = Crypt::decrypt($id);
            $user = User::find($id);
            if (!$user) return $this->showModalError();
            if ($request->input('passwordupdate') != NULL) {
                $user->password = bcrypt($request->input('passwordupdate'));
            }

            $user->name = strip_tags($request->input('name'));
            $user->email = strip_tags($request->input('email'));
            $user->role = strip_tags($request->input('role'));
            if ($request->input('role')=='admin') {
                $user->event = 'admin';
            } else {
                $user->event = strip_tags($request->input('event'));
            }
            $user->save();
            return response()->json(['stat' => true, 'msg' => $this->getMessage('update.success')]);
        }
        return redirect('/admin/user');
    }

    public function confirm($id)
    {
        $id = Crypt::decrypt($id);
        $manage_user  = User::find($id);
        $id = Crypt::encrypt($id);
        return ($manage_user) ? view('admin.pages.user.confirm', compact('manage_user', 'id')) : $this->showModalError();
    }

    public function destroy(Request $request)
    {
        try {
            $id = Crypt::decrypt($request->input('id'));
            User::where('id', '=', $id)->delete();
            return response()->json(['stat' => true, 'msg' => $this->getMessage('delete.success')]);
        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json(['stat' => false, 'msg' => $this->getMessage('delete.prevent')]);
        }
    }


}
