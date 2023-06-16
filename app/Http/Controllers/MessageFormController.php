<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageFormController extends Controller
{
    public function add()
    {
        return view('MessageBord.add');
    }

    public function confirm(Request $request)
    {
        $this->validate($request, [
            'name' => ['required']
        ]);

        if ($request->has('back')) {
            return redirect('/MessageBord/add')->withInput();
        }
        if ($request->has('send')) {
            $new_kubota = new Message();
            $new_kubota->name = $request->name;
            $new_kubota->con_add = $request->con_add;
            $new_kubota->add = $request->add;
            $new_kubota->details = $request->details;
            $new_kubota->save();
            return redirect('MessageBord/complete');
        }
        return view('MessageBord.confirm', compact('request'));
    }
    public function index(Request $request)
    {

        if ($request->has('send')) {
            $new_kensaku = $request->kensaku;
            // dd($request->all());
            $messages = Message::where('name', 'like', '%' . $new_kensaku . '%')->get();
            return view('MessageBord.index', compact('messages'));
        }
        $messages = Message::all();

        return view('MessageBord.index', compact('messages'));
    }
    public function delete($id)
    {
        $message_to_delete = Message::find($id);
        $message_to_delete->delete();
        return redirect('/MessageBord/index');
    }
    public function edit($id)
    {
        $kubota = Message::find($id);
        return view('MessageBord.edit', compact('kubota'));
    }
    public function update(Request $request, $id)
    {
        // dd($request);
        $this->validate($request, [
            'name' => ['required'],
            'con_add' => ['required'],
            'add' => ['required'],
            'details' => ['required']

        ]);

        $kubota = Message::find($id);
        $kubota->name = $request->name;
        $kubota->con_add = $request->con_add;
        $kubota->add = $request->add;
        $kubota->details = $request->details;

        $kubota->save();

        return redirect('/MessageBord/index');
    }
}
