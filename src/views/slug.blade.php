<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  @class(['dark' => ($appearance ?? 'system') == 'dark'])>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title inertia>{{ config('app.name', 'Laravel') }}</title>

      
    </head>
    <body class="font-sans antialiased">
       

        <div>
this is inside views slugs   package
        </div>

        <h3>{{$slug}}</h3>
    </body>
</html>
