<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class TaskController extends Controller
{
    // public function index()
    // {
    //     $tasks = DB::table('tasks')->where('name', 'like', 'Task%')->get();
    //     return view('contact', compact('tasks'));
    // }

    // public function show($id)
    // {
    //     $task = DB::table('tasks')->find($id);
    //     return view('task', compact('task'));
    // }
    /*-----------------------------------------------------*/

    // public function index()
    // {
    //    // $tasks = DB::table('tasks')->where('name', 'like', 'Task%')->get();
    //    $tasks = DB::table('tasks')->get();
    //     return view('tasks', compact('tasks'));
    // }

    // public function store(Request $request)
    // {
    //     DB::table('tasks')->insert([
    //         'name' => $request->name,
    //         'created_at' => now(),
    //         'updated_at' => now()
    //     ]);
    //     return 'store';
    // }

    // public function delete($id)
    // {
    //     DB::table('tasks')->where('id', '=', $id)->delete();
    //     return redirect()->back();
    // }
    /*
--------------------------------------------------------------
*/
    public function index()
    {
        // $tasks = DB::table('tasks')->where('name', 'like', 'Task%')->get();
        //  $tasks = DB::table('tasks')->get();
        $tasks = Task::all();
        return view('tasks', compact('tasks'));
    }

    public function store(Request $request)
    {
        // DB::table('tasks')->insert([
        //     'name' => $request->name,
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);
        $task = new Task();
        $task->name = $request->name;
        $task->save();
        return redirect()->back();
    }

    public function delete($id)
    {
        // DB::table('tasks')->where('id', '=', $id)->delete();
        Task::find($id)->delete();
        return redirect()->back();
    }
}
