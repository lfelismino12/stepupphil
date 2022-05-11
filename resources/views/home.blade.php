@extends('layouts.app')

@section('content')
<div class="container py-5">

    <div class="row">
        <div class="col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0">
            
            @if($users->count() > 0)
            
            <h5 class="font-weight-bold mb-3 text-center text-lg-start">Hi {{ \Auth::user()->name }}! Pick a user to chat with.</p>
            <div class="font-weight-bold mb-3 text-center text-lg-start">Online Users:</div>
            <div class="card">
                <div class="card-body">
                    <ul class="list-unstyled mb-0" id="users">
                        @foreach($users as $user)
                        <li class="p-2 border-bottom" style="background-color: #eee;">
                            <div class="d-flex flex-row">                                
                                <a href="javascript:void(0);" class="chat-toggle" data-id="{{ $user->id }}" data-user="{{ $user->name }}"><span class="label label-info">{{ $user->name }}</span></a>                                
                            </div>
                          </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <br></br>
            <div><a href= "{{ route('logout') }}">Log out</a></div>
            @else
                <p>No users found! try to add a new user using another browser by going to <a href="{{ url('register') }}">Register page</a></p>
            @endif
        </div>
    </div>
</div>

    @include('chat-box')

    <input type="hidden" id="current_user" value="{{ \Auth::user()->id }}" />
    <input type="hidden" id="pusher_app_key" value="{{ env('PUSHER_APP_KEY') }}" />
    <input type="hidden" id="pusher_cluster" value="{{ env('PUSHER_APP_CLUSTER') }}" />
@stop

@section('script')
    <script src="https://js.pusher.com/4.1/pusher.min.js"></script>
    <script src="{{ asset('js/chat.js') }}"></script>

@stop