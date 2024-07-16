@extends('layouts.app')

@section('content')
    <div>
        <style>
            .elevated-form {
              margin: 40px auto; /* center the form horizontally */
              padding: 20px;
              background-color: #f9f9f9; /* light gray background */
              border: 1px solid #ddd; /* light gray border */
              box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* add a subtle shadow to elevate the form */
              width: 50%; /* set the form width to 50% of the parent container */
              text-align: center; /* center the form contents */
            }
            
            .elevated-form textarea {
              width: 100%; /* set the textarea width to 100% of the form */
              height: 100px; /* set the textarea height */
              padding: 10px;
              font-size: 16px;
              border: 1px solid #ccc; /* light gray border */
            }
            
            .elevated-form button[type="submit"] {
              background-color: #4CAF50; /* green background */
              color: #fff; /* white text */
              padding: 10px 20px;
              border: none;
              border-radius: 5px;
              cursor: pointer;
            }
            
            .elevated-form button[type="submit"]:hover {
              background-color: #3e8e41; /* darker green background on hover */
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