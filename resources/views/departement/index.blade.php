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
    <h1 class="h3 mb-2 text-gray-800">Tableau des Departements </h1>
  
        
        </form>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ url('/departement/create') }}" class="btn btn-primary">Ajouter un Departement</a> 
            <a href="{{ url('/departementss') }}" class="btn btn-primary">Ajouter des Departements</a> 
        </div>
       
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Modifier</th>
                            <th>Suprimer</th>
                        </tr>
                    </thead>
                    <tbody>
               <?php  $departements=DB::table('deps')->select('deps.*')->get(); 
               ?>

                        @foreach ($departements as $departement)
                        <tr>
                            <td>{{ $departement->nom }}</td>
                          
                            <td> <a href="{{route('departement.updatedep',$departement->id)}}" class="btn btn-success">Modifier</a> </td>
                            <td>  
                            <a href="{{route('departement.deletedep',$departement->id)}}" class="btn btn-danger">Supprimer</a>  </td>
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