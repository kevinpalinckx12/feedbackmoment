<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <title>Feedbackmoment</title>
</head>
<body>
    <h1>{{ $name }} van Roosendaal</h1>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Origin</th>
            <th>Stock</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($fruits as $fruit)
        <tr>
            <td>{{ $fruit->name }}</td>
            <td>{{ $fruit->origin }}</td>
            <td>{{ $fruit->stock }}</td>
            <td>{{ $fruit->price }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
