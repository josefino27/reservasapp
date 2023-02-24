@extends('layouts.app')
@section('content')
<h1 style="color: aqua">vista usuarios</h1>
<div class="card-body ">
    <table class="table table-dark table-striped">
        <tr>
            <th>name</th>
            <th>email</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>
                {{$user->name}}
            </td> 
            <td>
                {{$user->email}}
            </td>       
        </tr>
        @endforeach
    
    </table>
</div>

@endsection
