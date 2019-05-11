@extends('layouts.app')

@section('content')
<div class="bg-white m-4 p-3 ">
    <div class="form-input justify-content-md-center">
        <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
        <form action="/users" method="POST">
            {{ csrf_field()}}
            <input class="form-control" type="text" name="name" placeholder="nama user" id="userName"/>
            <button type="submit" class="btn btn-primary">Tambah User</button>
        </form>
        </div>
    </div>
    <div class="user_groups container">
    @foreach($users as $user)
    <div class="container row  justify-content-md-center" >
        <div class="col">
            
        <h3> {{ $user -> name }}</h3>
        @foreach($user -> skills as $skill)
            <span class="badge badge-primary">{{ $skill -> name }}</span>
        @endforeach
        </div>
        <div class="col">
            <form action="/skills" method="POST"  class="form-horizontal" >
                {{ csrf_field()}}
                {{ Form::hidden('user_id', $user -> id) }}
                <div class="form-row align-items-center">
                    <div class="col-auto">
                <input class="form-control" type="text" name="name" id="skillName"/></div>
                <div class="col-auto"><button type="submit" class="btn btn-primary">Tambah Skill</button></div>
                </div>
            </form>
        </div>
        </div>
    @endforeach
    </div>
</div>
@endsection