<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
</head>

<body>
    <h1>User Profile</h1>

    @if ($user->profile_picture)
        <img src="{{ Storage::url($user->profile_picture) }}" alt="Profile Picture" width="200">
        <br><br>
        <form action="{{ route('profile.destroy') }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete Profile Picture</button>
        </form>
    @endif

    <br><br>
    <a href="{{ route('profile.edit') }}">Edit Profile</a>
</body>

</html>
