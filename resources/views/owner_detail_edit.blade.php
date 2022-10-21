<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Owner Details Edit</title>
</head>
<body>

<form> 
<input type='text 'name='first_name' value='{{$owner->first_name}}'>
<input type='text 'name='surname' value='{{$owner->surname}}'>
<input type='email 'name='email' value='{{$owner->email}}'>
<input type='number'name='phone' value='{{$owner->phone}}'>
<input type='text'name='adress' value='{{$owner->adress}}'>



</form>




</body>
</html>