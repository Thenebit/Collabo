@extends('layouts.app')

@section('content')
    <div>     
          
        <table class="elevated-table">
            <thead>
              <tr>
                <th>Author</th>
                <th>Idea Detail</th>
                <th>Comment</th>
                <th>Join</th>
                <th>Contributors</th>
              </tr>
            </thead>
            <tbody>
             @foreach ($data as $data)              
                <tr>
                  <td>{{ $data->user->name }}</td>
                  <td>{{ $data->ideades }}</td>
                  <td>5<button>Comment</button></td>
                  <td><button>Join</button></td>
                  <td>3</td>
              </tr> 
              @endforeach       
            </tbody>
        </table>       
    </div>
@endsection
