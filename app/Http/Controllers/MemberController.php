<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $informations = Member::paginate(3);
        return view('members.members', compact('informations'));
    }

    public function show($slug)
    {
        return view('members.single', ['title' => $slug]);
    }

    public function create()
    {
        return view('members.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:posts|max:20',
            'hobby' => 'required',
        ]);

        $member = new Member;
        $member->name = $request->name;
        $member->hobby = $request->hobby;
        $member->save();

        return redirect('members');
    }

    public function edit($id)
    {
        $members = Member::find($id);
        return view('members.edit', compact('members'));
    }

    public function update(Request $request, $id)
    {
        $member = Member::find($id);
        $member->name = $request->name;
        $member->hobby = $request->hobby;
        $member->save();

        return redirect('members');
    }
}
