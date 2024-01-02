<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index(): View
  {
    return view('user.index')->with('users', User::all());
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create(): View
  {
    return view('user.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(UserRequest $request): Response|RedirectResponse
  {
    $validated = $request->validated();
    var_dump($validated['biodata']);
    # split data
    preg_match('/(.*?)(\d+)(.*)/', $validated['biodata'], $data);
    [$text, $name, $age, $city] = $data;
    $name = trim($name);
    $age = trim($age);
    $city = strtoupper($city);

    # handle city
    $city = trim(preg_replace('/THN|TH|TAHUN/', '', $city));

    # store user
    $user = User::make([
      'name' => $name,
      'age' => $age,
      'city' => $city,
    ]);
    $user->save();

    return redirect()->route('user.show', ['user' => $user]);
  }

  /**
   * Display the specified resource.
   */
  public function show(User $user): View
  {
    return view('user.show')->with('user', $user);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(User $user)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, User $user)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(User $user)
  {
    //
  }
}
