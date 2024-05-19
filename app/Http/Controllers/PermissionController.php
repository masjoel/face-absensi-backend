<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $permissions = Permission::with('user')
            ->when($request->input('name'), function ($query, $name) {
                $query->whereHas('user', function ($query) use ($name) {
                    $query->where('name', 'like', '%' . $name . '%');
                });
            })->orderBy('id', 'desc')->paginate(10);
        $title = 'Permissions';
        return view('pages.permission.index', compact('permissions', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Permission $permission)
    {
        // $permission = Permission::with('user')->find($id);
        return view('pages.permission.show', compact('permission'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permission $permission)
    {
        // $permission = Permission::find($id);
        return view('pages.permission.edit', compact('permission'));
    }
    // public function sendNotificationToUser($userId, $message)
    // {
    //     // Dapatkan FCM token user dari tabel 'users'

    //     $user = User::find($userId);
    //     $token = $user->fcm_token;

    //     // Kirim notifikasi ke perangkat Android
    //     $messaging = app('firebase.messaging');
    //     $notification = Notification::create('Status Izin', $message);

    //     $message = CloudMessage::withTarget('token', $token)
    //         ->withNotification($notification);

    //     $messaging->send($message);
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permission $permission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission)
    {
        //
    }
}
