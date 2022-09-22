<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>All Posts</h1>

    <table border="1" width="100%">
        <thead>
            <th>Serial No</th>
            <th>Title</th>
            <th>Details</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php foreach ($posts as $post) { ?>
            <tr>
                <td><?php echo $post->id; ?></td>
                <td><?php echo $post->title; ?></td>
                <td><?php echo $post->details; ?></td>
                <td>Show ||Edit||Delete</td>
            </tr>
            <?php } ?>
        </tbody>
    </table> -->

    <h1>All Posts</h1>
    <table border="1" width="80%">
            <thead>
                <th>Serial No</th>
                <th>Title</th>
                <th>Details</th>
                <th>Action</th>
            </thead>
            <tbody>
              

                    @foreach ($posts as $post )
                    
                    <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->details }}</td>
                
                    <td>
                        <a href="{{ route('post.show',$post->id ) }}">Show Details</a>||
                        <a href="{{ route('post.edit',$post->id ) }}">Edit</a>||

                        <!-- <a href="<?php echo url('post/delete',$post->id); ?>">Delete</a>|| -->
        
                        <form action="{{ route('post.destroy', $post->id) }}" method="post" >
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>

                        </form>
                       
                    </td>
                </tr>

                    @endforeach
        
                
              
            </tbody>
    </table>
</body>
</html>