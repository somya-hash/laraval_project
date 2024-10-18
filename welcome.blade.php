<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="container">
            <div class="row">
                <table class="table">
<thead>
    <tr>

    <th>Sr No</th>
    <th>User Name</th>
    <th>Email</th>
    <th>Phone</th>
    </tr>
        </thead>
<tbody>
    @php
    $i = 0;
    @endphp

@foreach ($user as $row)
<tr>
<td>{{$i++}}</td>
<td>{{$row->user_name}}</td>
<td>{{$row->email}}</td>
<td>{{$row->phone}}</td>


</tr>
@endforeach


        </tbody>


                </table>
        </div>
        </div>
        
    </body>
</html>
