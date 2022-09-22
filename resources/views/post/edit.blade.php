<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Create</title>
</head>
<body>
    <h1>Create New Post</h1>
    <form action={{ route('post.update', $post->id) }} method="post">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $post->title }}" placeholder="Title here"> <br><br>
        <textarea name="details" id="" cols="30" rows="10" placeholder="Details">{{ $post->details }}</textarea><br><br>
        <button>Update</button>
    </form>

       
</form>
</body>
</html>