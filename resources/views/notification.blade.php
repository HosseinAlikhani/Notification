@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="src/css/style.css"crossorigin="anonymous">
    <link rel="stylesheet" href="src/fontawesome/css/all.css"crossorigin="anonymous">
@endsection
@section('content')
<div class="container">
    </div>
        @if(!empty($notification->first()))
        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Message</th>
                <th>Create at</th>
                <th> Operation </th>
            </tr>
            </thead>
            <tbody>
            @foreach($notification as $notifications)
                <tr>
                    <td> {{ $notifications->user->id }} ) </td>
                    <td> {{ $notifications->user->username }}</td>
                    <td> {{ $notifications->message }}</td>
                    <td> {{ $notifications->created_at }}</td>
                    <td>
                        <button
                                onclick="window.location.href = '{{ route('delete.notification', $notifications->id) }}';"
                                type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        @else
            <div class="alert alert-danger">
                <a> Notification Not Found </a>
            </div>
        @endif
        @if( $errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
            @endforeach
        @endif
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        <form method="post" action=" {{ route('post.notification') }}">
            @csrf
            <div class="form-group">
                <h3> Add Notification </h3>
                <label for="selectUser">Select USer</label>
                <select class="form-control" name="user_id">
                    @foreach($user as $users)
                        <option value="{{ $users->id }}"> {{ $users->username }} - {{ $users->email }}</option>
                    @endforeach
                </select>
                <small class="form-text text-muted">Send Notification to which User</small>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea type="text" name="message" class="form-control" placeholder="Message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>
@endsection