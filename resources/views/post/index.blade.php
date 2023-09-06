<!DOCTYPE html>
                <!-- Coding by CodingNepal | www.codingnepalweb.com -->
                <html lang="en" dir="ltr">
                  <head>
                    <meta charset="UTF-8">
                    <title> Responsiive Admin Dashboard | CodingLab </title>
                    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
                    <!-- Boxicons CDN Link -->
                    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
                     <meta name="viewport" content="width=device-width, initial-scale=1.0">
                   </head>

@include('menu')

@csrf

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tableau des Posts </h1>
  
        
        </form>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ url('/post/create') }}" class="btn btn-primary">Ajouter un Post</a> 
            <a href="{{ url('/postss') }}" class="btn btn-primary">Ajouter Plusieurs Postes</a> 
        </div>
       
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Post</th>
                            <th>Departement</th>
                            <th>Modifier</th>
                            <th>Suprimer</th>
                        </tr>
                    </thead>
                    <tbody>
               <?php  $posts=DB::table('posts')->join('deps','posts.deps_id','=','deps.id')->select('posts.*','deps.nom as deps_id')->get(); 
               ?>

                        @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->nom }}</td>
                            <td>{{ $post->deps_id }}</td>
                          
                            <td> <a href="{{route('post.updatepost',$post->id)}}" class="btn btn-success">Modifier</a> </td>
                            <td>  
                            <a href="{{route('post.deletepost',$post->id)}}" class="btn btn-danger">Supprimer</a>  </td>
                        </tr>
                        
                        @endforeach
                       
                    </tbody>
                </table>

          
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@include('footer')