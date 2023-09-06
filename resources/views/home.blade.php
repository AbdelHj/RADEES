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
                <body>

            

                @include('menu')



                <div class="home-content">
                      <div class="overview-boxes">
                        <div class="box">
                          <div class="right-side">
                            <div class="box-topic">Le Nombre total d'Employes</div>
                            <div class="number">{{$countemployee}}</div>
                          </div>
                        </div>
                        <div class="box">
                          <div class="right-side">
                            <div class="box-topic">Le Nombre total de demandes</div>
                            <div class="number">{{$countdemande}}</div>
                          </div>
                        </div>
                        <div class="box">
                          <div class="right-side">
                            <div class="box-topic">le Nombre total de departement</div>
                            <div class="number">{{$countdepartement}}</div>
                          </div>
                        </div>
                        <div class="box">
                          <div class="right-side">
                            <div class="box-topic">le Nombre total de Post</div>
                            <div class="number">{{$countpost}}</div>
                          </div>
                        </div>
                      </div>
                
                      <div class="sales-boxes">
                        <div class="recent-sales box">
                          <div class="title">Demandes Recent</div>
                          <div class="sales-details">
                          <?php  $demandes=DB::table('advance_requests')->join('employees','advance_requests.employee_id','=','employees.id')->join('types','advance_requests.type_id','=','types.id')->select('advance_requests.*','employees.nom as employee_nom','employees.prenom as employee_prenom','types.nom as type_id')->get(); ?>
                            <ul class="details">
                              <li class="topic">Date</li>
                              @foreach($demandes as $demande)
                              <li><a href="#">{{ $demande->created_at }}</a></li>
                              @endforeach
                            </ul>
                            <ul class="details">
                            <li class="topic">Employe</li>
                            @foreach($demandes as $demande)
                              <li><a href="#">{{ $demande->employee_prenom }}</a></li>
                            @endforeach
                          </ul>
                          <ul class="details">
                            <li class="topic">Montant</li>
                            @foreach($demandes as $demande)
                              <li><a href="#">{{ $demande->advance_amount }}</a></li>
                            @endforeach
                          </ul>
                          <ul class="details">
                            <li class="topic">Etat</li>
                            @foreach($demandes as $demande)
                              @if($demande->etat == '')
                              <li><a href="#">En traitement</a></li>
                                @elseif($demande->etat == '1')
                                <li><a href="#">Accepté</a></li>
                                @elseif($demande->etat == '0')
                                <li><a href="#">Refusé</a></li>
                              @endif
                            @endforeach
                          </ul>
                          </div>
                          <div class="button">
                            <a href="/demandes_recues">See All</a>
                          </div>
                        </div>
                        <div class="top-sales box">
                        <?php  $results = DB::select( DB::raw("select * from lara.employees, (select
                        employee_id, SUM(advance_amount) as advance_amount
                        from lara.advance_requests
                        group by employee_id
                        order by advance_amount DESC) as t
                        where employees.id = t.employee_id;") ); ?>
                          <div class="title">Top Employees</div>
                          <div class="toptop">
                            <ul class="top-sales-details">
                                @foreach($results as $result)
                                    <li>
                                        <a href="#"><span class="product">{{ $result->nom }}</span></a>
                                        <span class="price">{{ $result->advance_amount }}</span>
                                    </li>
                                @endforeach
                            </ul>
                            </div>
                        </div>
                      </div>
                    </div>




    
    @include('footer')

</body>

</html>

