<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Vue Laravel SPA') }}</title>
  <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
<div id="app">
  <header-component></header-component>
  <router-view></router-view>
</div>

<script src="{{ mix('/js/app.js') }}" defer></script>
</body>
</html>
