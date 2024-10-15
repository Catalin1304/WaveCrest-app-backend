<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('bootstrap-4.0.0-dist/css/bootstrap.css') }}" rel="stylesheet">
    <title>Events</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
            color: #343a40;
        }
        .container {
            margin-top: 30px;
        }
        .table {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .btn-primary {
            margin-right: 10px;
        }
        .btn-success {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>List of the events</h1>

    <div class="text-right">
        <a href="{{ route('events.create') }}" class="btn btn-success">
            <i class="fa fa-plus"></i> Add events
        </a>
    </div>
    @if ($events->isEmpty())
        <div class="alert alert-warning mt-4" role="alert">
            No events available
        </div>
    @else
        <table class="table table-hover mt-4">
            <thead class="thead-dark">
            <tr>
                <th>Name of the event</th>
                <th>Date</th>
                <th>How many persons</th>
                <th>ID of the persons</th>
                <th>Buttons</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($events as $event)
                <tr>
                    <td>{{ $event->name }}</td>
                    <td>{{ $event->event_date }}</td>
                    <td>{{ $event->required_people }}</td>
                    <td>{{ $event->associated_people }}</td>
                    <td>
                        <a href="{{ route('events.edit', $event->id) }}" class="btn btn-primary">Editează</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</div>

<script src="{{ asset('bootstrap-4.0.0-dist/js/bootstrap.js') }}"></script>
</body>
</html>
