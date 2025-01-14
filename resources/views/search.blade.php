<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>search</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <h1>Search form</h1>

    <form action={{ action('SearchController@search') }}>
        @csrf
        <input type="text" name="firstName" placeholder="Search by first name">
        <input type="text" name="lastName" placeholder="Search by surname">
        <button type="submit">Search</button>

    </form>

    @if (isset($owners))
        <table>

            @foreach ($owners as $owner)
                <tr>
                    <td>
                        <h2>{{ $owner->surname }} {{ $owner->first_name }} </h2>
                    </td>
                    <td>

                        <a href="{{ action('OwnerController@ownerDetail', $owner->id) }}">
                            <button type="submit">See
                                Owner</button>
                        </a>
                    </td>


                    <td>
                        @foreach ($owner->animal as $pet)
                <tr>
                    <td> {{ $pet->name }} - {{ $pet->species }}</td>
                    <td>

                        <a href={{ action('AnimalController@animalDetail', $pet->id) }}>
                            <button>See animal</button>
                        </a>
                    </td>
                </tr>
            @endforeach
            </td>

            </tr>
    @endforeach
    </table>

    @endif



</body>

</html>
