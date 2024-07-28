@extends('layouts.app')

@section('content')
    <div>
        <style>
            .elevated-form {
              margin: 40px auto; 
              padding: 20px;
              background-color: #f9f9f9; 
              border: 1px solid #ddd; 
              box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
              width: 50%; 
              text-align: center;
            }
            
            .elevated-form textarea {
              width: 100%; 
              height: 100px; 
              padding: 10px;
              font-size: 16px;
              border: 1px solid #ccc; 
            }
            
            .elevated-form button[type="submit"] {
              background-color: #4CAF50; 
              color: #fff;
              padding: 10px 20px;
              border: none;
              border-radius: 5px;
              cursor: pointer;
            }
            
            .elevated-form button[type="submit"]:hover {
              background-color: #3e8e41;
            }
          </style>
          
          <div class="elevated-form">
            <form action="{{ url('store') }}" method="post">
                @csrf
                <textarea name="ideades" placeholder="Type your message..."></textarea>
                <button type="submit">Send</button>
            </form>
        </div>
    </div>
@endsection