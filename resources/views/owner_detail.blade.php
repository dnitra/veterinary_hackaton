<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Owner Details</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<form action='{{route('owners.update', $owner->id)}}' class='edit_form' method='post'>
@method('PUT')
@csrf
<strong><label>Firstname:</label></strong> <br>
<input type='text 'name='first_name' value='{{$owner->first_name}}'> <br><br>
<strong><label>Surname:</label></strong> <br>
<input type='text 'name='surname' value='{{$owner->surname}}'> <br><br>
<strong><label>Email:</label></strong> <br>
<input type='email 'name='email' value='{{$owner->email}}'> <br><br>
<strong><label>Number:</label></strong> <br>
<input type='number'name='phone' value='{{$owner->phone}}'> <br><br>
<strong><label>Address:</label></strong> <br> 
<input type='text'name='address' value='{{$owner->address}}'> <br><br>
<button type="submit">Submit</button>



</form>



</body>
</html>