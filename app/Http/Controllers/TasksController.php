<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class TasksController extends Controller
{
    // getでmessages/にアクセスされた場合の「一覧表示処理」
    public function index()
    {
        $tasks = Task::all();

        return view('tasks.index', [
            'tasks' => $tasks,
        ]);
    }
    

    // getでmessages/createにアクセスされた場合の「新規登録画面表示処理」
    public function create()
    {
         $task = new Task;

        return view('tasks.create', [
            'task' => $task,
        ]);
    }

    // postでmessages/にアクセスされた場合の「新規登録処理」
    public function store(Request $request)
    {
        //
    }

    // getでmessages/idにアクセスされた場合の「取得表示処理」
    public function show($id)
    {
         $task = Task::find($id);

        return view('tasks.show', [
            'task' => $task,
        ]);
    }

    // getでmessages/id/editにアクセスされた場合の「更新画面表示処理」
    public function edit($id)
    {
        $task = Task::find($id);

        return view('tasks.edit', [
            'task' => $task,
        ]);
    }

    // putまたはpatchでmessages/idにアクセスされた場合の「更新処理」
    public function update(Request $request, $id)
    {
        //
    }

    // deleteでmessages/idにアクセスされた場合の「削除処理」
    public function destroy($id)
    {
        //
    }
}