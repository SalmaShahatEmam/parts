<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ getSetting('site_name',app()->getLocale()) }} | @yield('title') </title>

    @seo
    @include('site.layouts.style')

</head>

<body>
