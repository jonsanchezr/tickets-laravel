@extends('layouts.app')
@section('content')
  <div class="text-center">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
  </div>
  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h2>{{ $queue->name}}</h2>
    <table class="table">
      <thead>
        <tr>
          <td>@lang('ID')</td>
          <td>@lang('Cliente')</td>
          <td>@lang('Action')</td>
        </tr>
      </thead>
      <tbody>
        @foreach($queue->clients as $client)
        <tr>
          <td>{{$client->identity}}</td>
          <td>{{$client->name}}</td>
          <td>
          	@if($client->status == 1)
          		<a href="#" onclick="event.preventDefault()" class="btn btn-secondary">@lang('Atendido')</a>
          	@else
          		<a href="{{route('clients.update', $client->id)}}" class="btn btn-success">@lang('Atender')</a>
          	@endif
          	<a href="{{route('clients.destroy', $client->id)}}" class="btn btn-danger">@lang('Eliminar')</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection