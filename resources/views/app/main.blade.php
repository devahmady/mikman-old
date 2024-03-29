
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title> {{ $title }} </title>
    <!-- CSS files -->
    <link href="{{ asset('mikman')}}/css/tabler.min.css?1668287865" rel="stylesheet"/>
    

<style>
      /* @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: Inter, -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      } */
      
    </style>
  </head>
  <body >
    
    <div class="page">
      <!-- Navbar -->
     @include('app.nav')
     <div class="page-wrapper">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                @yield('header')
            </div>    
        </div>
     </div>  
     @include('app.foot')
      </div>
    </div>
    @include('app.script')
  </body>
</html>