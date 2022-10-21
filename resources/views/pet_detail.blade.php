<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pet Details</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    @include('common/messages')
    <ul>
        
        <form action="{{ route("animal.update", $animal->id )}}" class="edit_form" method="post">
            @method('PUT')
            @csrf 
            <img src="{{asset('img/pets/'.$animal->image->path)}}"><br>
            <label for="name"><strong>Name:</strong></label><br>
            <input name="name" type="text" value="{{$animal->name}}"><br><br>
            <label for="species"><strong>Species:</strong></label><br>
            <input name="species" type="text" value="{{$animal->species }}"><br><br>
            <label for="breed"><strong>Breed:</strong></label><br>
            <input name="breed" type="text" value="{{$animal->breed }}"><br><br>
            <label for="age"><strong>Age:</strong></label><br>
            <input name="age" type="number" value="{{$animal->age}}"> <br><br>
            <label for="weight"><strong>Weight:</strong></label><br>
            <input name="weight" type="number" value="{{$animal->weight}}"><br>
            
            

            <button type="submit">Update</button>
            

        </form>
            
        @if ($animal->id)
        <form action="{{ route('animal.delete', $animal->id) }}" method="post">
            @method('DELETE')
            @csrf
            <button type="submit">Remove</button>
        </form>
        @endif
        
        
    </ul>
</body>
</html>