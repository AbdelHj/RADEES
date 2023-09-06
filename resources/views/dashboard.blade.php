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


@include('menu2')

@csrf
            <div class="home-content">
                      <div class="overview-boxes">
                        <div class="box">
                          <div class="right-side">
                            <div class="box-topic">Demandes envoyees</div>
                            <div class="number">{{$count}}</div>
                          </div>
                        </div>
                        <div class="box">
                          <div class="right-side">
                            <div class="box-topic">Demandes acceptes</div>
                            <div class="number">{{$accepter}}</div>
                          </div>
                        </div>
                        <div class="box">
                          <div class="right-side">
                            <div class="box-topic">Demandes rejetees</div>
                            <div class="number">{{$refuser}}</div>
                          </div>
                        </div>
                        <div class="box">
                          <div class="right-side">
                            <div class="box-topic">En traitement</div>
                            <div class="number">{{$traitment}}</div>
                          </div>
                        </div>
                      </div>
                
                      
                      </div>
                    </div>




    
    @include('footer')

</body>

</html>
