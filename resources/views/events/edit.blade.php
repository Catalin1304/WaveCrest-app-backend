<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('bootstrap-4.0.0-dist/css/bootstrap.css') }}" rel="stylesheet">
    <title>Edit the event</title>
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
        .form-group {
            margin-bottom: 20px;
        }
        .btn-primary {
            margin-right: 10px;
        }
        .btn-success {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Edit the event</h1>

    <form action="{{ route('events.update', $event->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name of the event:</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $event->name }}" required>
        </div>

        <div class="form-group">
            <label for="event_date">Date:</label>
            <input type="date" id="event_date" name="event_date" class="form-control" value="{{ $event->event_date }}" required>
        </div>

        <div class="form-group">
            <label for="required_people">How many persons:</label>
            <input type="number" id="required_people" name="required_people" class="form-control" value="{{ $event->required_people }}" required>
        </div>

        <div class="form-group">
            <label for="associated_people">Choose person:</label>
            <select id="associated_people" name="associated_people" class="form-control" required>
                <option value="">Choose a person</option>
                @foreach ($persons as $person)
                    <option value="{{ $person->id }}" {{ $event->associated_people == $person->id ? 'selected' : '' }}>{{ $person->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Salvează Modificările</button>
        <a href="{{ route('events.index') }}" class="btn btn-primary">Înapoi la lista de evenimente</a>
    </form>
</div>

<script src="{{ asset('bootstrap-4.0.0-dist/js/bootstrap.js') }}"></script>
</body>
</html>
