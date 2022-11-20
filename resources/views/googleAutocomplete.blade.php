<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>How to Add Google Map in Laravel? - ItSolutionStuff.com</title>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <link rel="stylesheet" href="/Css/bootstrap.css">
  <link rel="stylesheet" href="/Css/estilos.css">
  <link rel="stylesheet" href="{{asset('css/>app.css')}}">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK"
    crossorigin="anonymous"></script>
  <style type="text/css">
    #map {
      height: 400px;
    }
  </style>
  @include('partials.navbar')
</head>

<body>
  <div class="container mt-5">
    <br>
    <h2>Contactanos</h2>
    <div id="map"></div>
  </div>

  <script type="text/javascript">
    function initMap() {
      const myLatLng = { lat: 14.85021159224096, lng: -91.53450433132487 };
      const myLatLng2 = { lat: 14.290045454745634, lng: -90.78451444284038 };
      const myLatLng3 = { lat: 14.660688765416312, lng: -90.81030406784659 };
      const myLatLng4 = { lat: 14.53417573386823, lng: -91.49362939625723 };
      const myLatLng5 = { lat: 14.702434695769677, lng: -91.85190988876408 };
      const myLatLng6 = { lat: 14.622138360852311, lng: -90.55276816226137 };
      const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 9,
        center: myLatLng3,
      });

      new google.maps.Marker({
        position: myLatLng,
        map,
        title: "Pradera Xela, Quetzaltenango",
      });

      new google.maps.Marker({
        position: myLatLng2,
        map,
        title: "Hello Rajkot!",
      });

      new google.maps.Marker({
        position: myLatLng3,
        map,
        title: "Hello Rajkot!",
      });

      new google.maps.Marker({
        position: myLatLng4,
        map,
        title: "Hello Rajkot!",
      });
      new google.maps.Marker({
        position: myLatLng5,
        map,
        title: "Hello Rajkot!",
      });
      new google.maps.Marker({
        position: myLatLng6,
        map,
        title: "Hello Rajkot!",
      });
    }
    window.initMap = initMap;
  </script>

  <script type="text/javascript"
    src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap"></script>

  <img class="ima" src="Assets/Recursos/LOGOProgra.png" alt="" width="50%">
  <h2 class=" par">Poniendo la tecnologia a tu alcance!</h2>

</body>

<footer>
  @include('partials._footer')
</footer>

</html>