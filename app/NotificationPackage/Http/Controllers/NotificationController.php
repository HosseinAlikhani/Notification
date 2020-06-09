<?php

namespace App\NotificationPackage\Http\Controllers;

use App\Base\BaseEntity;
use App\Events\NotificationEvent;
use App\Http\Requests\NotificationRequest;
use App\Model\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class NotificationController extends BaseEntity
{
    public function __construct(Notification $notification)
    {
        $this->model = $notification;
    }
    public function index()
    {
        return view('index');
    }
    public function dashboard()
    {
        $user = app(UserController::class)->getUsers();
        $notification = $this->model->all();
        return view('notification', compact(['user', 'notification']));
    }
    public function notificationValidator($request)
    {

    }
    public function postNotification(NotificationRequest $request)
    {
        $validate = $request->validated();
        $check = $this->model->create([
            'user_id'   =>  $validate['user_id'],
            'message'  =>  $validate['message'],
        ]);
        event(new NotificationEvent($validate));
        if ($check){
            return redirect()
                ->route('dashboard')
                ->with('message', 'your notification send successfully');
        }else{
            return redirect()
                ->route('dashboard')
                ->with('message', 'Problem when send notification');
        }
    }
    public function deleteNotification($id)
    {
        if ($this->model->destroy($id)){
            return redirect()
                ->route('dashboard')
                ->with('message', 'Notification are Deleted');
        }else{
            return redirect()
                ->route('dashboard')
                ->with('message', 'Error When Delete Notification');
        }
    }
}
