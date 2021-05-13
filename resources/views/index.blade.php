@extends('layouts.app')
@section('content')

<div class="container-fluid">
	<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
		@if($errors)
		    @foreach ($errors->all() as $error)
		        <div class="alert alert-danger" role="alert">
		            {{ $error }}
		        </div>
		    @endforeach
		@endif

		@if (session('success'))
		    <div class="alert alert-success">
		        {{ session('success') }}
		    </div>
		@endif
	  
	  <form action="{{route('tickets.store')}}" method="POST">
	    @csrf
	    <div class="form-row">
		    <div class="form-group col-md-4">
		      <label for="identity">@lang('Identidad')</label>
		      <input type="text" class="form-control" name="identity" id="identity" placeholder="@lang('Identidad')" required>
		    </div>

		    <div class="form-group col-md-4">
		      <label for="name">@lang('Nombre')</label>
		      <input type="text" class="form-control" name="name" id="name" placeholder="@lang('Nombre')" required>
		    </div>

		    <div class="form-group col-md-2">
		      <label for="queue">@lang('Cola')</label>
		      <select id="queue" class="form-control" name="queue_id" required>
		        <option selected value="">@lang('Seleccione una cola')...</option>
		        @foreach($queues as $queue)
		            <option value="{{ $queue->id}}"
		              >{{ $queue->name }}</option>     
		        @endforeach
		      </select>
		    </div>

		    <div class="form-group col-md-2">
		      <label>Accion</label>
		      <button type="submit" class="form-control btn btn-primary">@lang('Agregar')</button>
		    </div>
		</div>   
	  </form>
	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
			  <h2>@lang('Cola') 1</h2>
			  <table class="table">
			    <thead>
			      <tr>
			        <td>@lang('ID')</td>
        			<td>@lang('Cliente')</td>
			      </tr>
			    </thead>
			    <tbody>
			      @foreach($queue1 as $client1)
				      @if($client1->status == 0)
					      <tr>
					        <td>{{$client1->identity}}</td>
					        <td>{{$client1->name}}</td>
					      </tr>
				      @endif
			      @endforeach
			    </tbody>
			  </table>
			</div>
		</div>
		<div class="col-md-6">
			<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
			  <h2>@lang('Cola') 2</h2>
			  <table class="table">
			    <thead>
			      <tr>
			        <td>@lang('ID')</td>
        			<td>@lang('Cliente')</td>
			      </tr>
			    </thead>
			    <tbody>
			      @foreach($queue2 as $client2)
			      	@if($client2->status == 0)
				      <tr>
				        <td>{{$client2->identity}}</td>
				        <td>{{$client2->name}}</td>
				      </tr>
				    @endif
			      @endforeach
			    </tbody>
			  </table>
			</div>
		</div>
	</div>
</div>
@endsection