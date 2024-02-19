<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/img/icon/android-chrome-192x192.png" type="image/x-icon">
    <link rel="shortcut icon" href="/img/icon/android-chrome-512x512.png" type="image/x-icon">
    <link rel="shortcut icon" href="/img/icon/apple-touch-icon.png" type="image/x-icon">
    <link rel="shortcut icon" href="/img/icon/favicon-16x16.png" type="image/x-icon">
    <link rel="shortcut icon" href="/img/icon/favicon-32x32.png" type="image/x-icon">
    <title>Bootstrap demo</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    
    <x-navbar/>
    <x-bg/>
    
    
    {{$slot}}
    
   
</body>
</html>