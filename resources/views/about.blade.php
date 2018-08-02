<!doctype html>
<html lang="{{ app()->getLocale() }}">
<h1>About</h1>
@foreach ($rank as $row)
    <li>{{ $row->rank_name }}</li>
@endforeach
</html>
