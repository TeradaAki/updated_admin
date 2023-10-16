<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer</title>
</head>
<body>
    @extends('layout.layout')

    @section('account_name')
    @auth
        <h4>{{ auth()->user()->name }}</h4>
    @endauth
    @endsection

    @section('content')
        <div class="customer">
            <table>
                <tr>
                    <th>Username</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>House number</th>
                    <th>Barangay</th>
                    <th>Street Address</th>
                    <th>Password</th>
                  </tr>
                  <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Germany</td>
                  </tr>
                  <tr>
                    <td>Centro comercial Moctezuma</td>
                    <td>Francisco Chang</td>
                    <td>Mexico</td>
                  </tr>
            </table>
        </div>
    @endsection
</body>
</html>