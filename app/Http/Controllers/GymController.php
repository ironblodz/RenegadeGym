<?php

namespace App\Http\Controllers;

use App\Models\Gym;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateGymRequest;
class GymController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy("name")->get();
        $gym = Gym::all();
        return view('gym.list', compact('categories', 'gym'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy("name")->get();
        $gym= new Gym;
        return view('gym.add', compact("categories", "gym"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fields=$request->validated();
        $gym=new Gym();
        $gym->fill($fields);
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('public/gym_images');
            $gym->image = basename($gym);
        }
        $gym->category_id = $fields["category"];
        $gym->save();
        return redirect()->route('gym.index')->with('success', 'Gym created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gym  $gym
     * @return \Illuminate\Http\Response
     */
    public function show(Gym $gym)
    {
        return view('gym.show', compact("gym"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gym  $gym
     * @return \Illuminate\Http\Response
     */
    public function edit(Gym $gym)
    {
        $categories = Category::orderBy("name")->get();
        return view('gym.edit', compact('categories','gym'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gym  $gym
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGymRequest $request, Gym $gym)
    {
        $fields=$request->validated();
        $gym->fill($fields);
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('public/gym_images');
            $gym->image = basename($image);
        }
        $gym->save();
        return redirect()->route('gym.index')->with('success', 'Gym successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gym  $gym
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gym $gym)
    {
        $gym->delete();
        return redirect()->route('gym.index')->with('success', 'O ginásio foi eliminado com sucesso');
    }
}
