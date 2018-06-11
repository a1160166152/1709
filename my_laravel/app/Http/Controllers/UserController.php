<?php
/**
 * Created by PhpStorm.
 * User: 老薛
 * Date: 2018/6/7
 * Time: 10:28
 */

namespace App\Http\Controllers;



use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function index()
    {
        $users = DB::table('admin')->get();
        return view('user.index', ['users' => $users]);
    }


    public function add()
    {
        return view('user.add');
    }

    public function addSave()
    {
        $data = $_POST;
        unset($data['_token']);
        $data['login_times'] = 1;
        $data['login_last'] = time();
        DB::table('admin')->insert($data);
        return redirect('index');
    }

    public function edit($id)
    {
        $users = $users = DB::table('admin')->where(['id'=>$id])->first();
        return view('user.edit', ['data' => $users]);
    }

    public function editSave()
    {
        $data = $_POST;
        unset($data['_token']);
        $data['login_times'] += 1;
        $data['login_last'] = time();
        DB::table('admin')->where(['id'=>$data['id']])->update($data);
        return redirect('index');
    }

    public function delete($id)
    {
        $users = DB::table('admin')->where(['id'=>$id])->delete();
        return redirect('index');
    }






}