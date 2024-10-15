<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adaugă Eveniment</title>
</head>
<body>
<h1>Adaugă Eveniment Nou</h1>

<form action="{{ route('events.store') }}" method="POST">
    @csrf
    <label for="name">Name event:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="event_date">Date:</label>
    <input type="date" id="event_date" name="event_date" required><br><br>

    <label for="required_people">How many persons:</label>
    <input type="number" id="required_people" name="required_people" required><br><br>

    <label for="associated_people">Choose person:</label>
    <select id="associated_people" name="associated_people" required>
        <option value="">Choose a person</option>
        @foreach ($persons as $person)
            <option value="{{ $person->id }}">{{ $person->name }}</option>
        @endforeach
    </select><br><br>

    <button type="submit">Add event !</button>
</form>

<a href="{{ route('events.index') }}">Back to the events</a>
</body>
</html>
