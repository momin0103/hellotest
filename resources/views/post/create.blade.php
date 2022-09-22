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
<h2><a href="{{ route('post.index') }}">All Post</a></h2>

    <form action="{{ route('post.store') }}" method="post">
    @csrf

        <input type="text" name="title" placeholder="Title here"> <br><br>
        <textarea name="details" id="" cols="30" rows="10" placeholder="Details"></textarea><br><br>
        <button>Submit</button>
    </form>

    <!-- <h1>Create 2nd Post</h1>
    <form action="<?php echo url('post/store1'); ?>" method="post">
    <?php echo csrf_field(); ?>
    <input type="text" name="name" placeholder="Enter Name" required><br><br>
    <input type="email" name="email" placeholder="Enter Email"><br><br>
    <input type="password" name="password" placeholder="Enter Password"><br><br>
    <textarea name="" id="" cols="30" rows="10" name="details" placeholder="Details"></textarea><br><br>
    <button>Submit</button> -->


</form>
</body>
</html>