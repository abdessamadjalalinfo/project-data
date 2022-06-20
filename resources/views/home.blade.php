@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Dataset') }} :{{ $cars->count()}} rows

                </div>
            </div>
        </div>


<div class="row">
    <br>
<div class="col-2">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
  Top Modal
</button>
</div>
<div class="col-2">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
Top Manufacturer
</button>
</div>
<div class="col-2">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
Type
</button>

</div>

<div class="col-2">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal4">
Statistics of price
</button>

</div>

<div class="col-2">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
Horsepower and price
</button>

</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Top Modal </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">Model</th>
      <th scope="col">count</th>
     
    </tr>
  </thead>
  <tbody>
  @foreach($topmodels as $topmodel)  
  <tr>
      <th scope="row">{{\App\Models\Modele::find($topmodel)[0]->model}} </th>
      <td>{{\App\Models\Car::All()->where('model_id',$topmodel->model_id)->count()}}</td>
      
    </tr>
    @endforeach
   
    
  </tbody>
</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Top Manufacturer </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">Model</th>
      <th scope="col">count</th>
     
    </tr>
  </thead>
  <tbody>
  @foreach($topmanufactuter as $topman)  
  <tr>
      <th scope="row">{{\App\Models\Manufacturer::find($topman)[0]->manufacturer}} </th>
      <td>{{\App\Models\Car::All()->where('manufacturer_id',$topman->manufacturer_id)->count()}}</td>
      
    </tr>
    @endforeach
   
    
  </tbody>
</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</div>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Top type </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">Type</th>
      <th scope="col">count</th>
     
    </tr>
  </thead>
  <tbody>
  @foreach($toptypes as $toptype)  
  <tr>
      <th scope="row">{{\App\Models\Type::find($toptype)[0]->type}} </th>
      <td>{{\App\Models\Car::All()->where('type_id',$toptype->type_id)->count()}}</td>
      
    </tr>
    @endforeach
   
    
  </tbody>
</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</div>







<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pricing</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">Max</th>
      <th scope="col">Min</th>
      <th scope="col">Avg</th>
     
    </tr>
  </thead>
  <tbody>
 
  <tr>
      <th scope="row">{{$max}} </th>
      <td>{{$min}}</td>
      <td>{{$avg}}</td>
      
    </tr>
   
   
    
  </tbody>
</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</div>





        <table class="table">
  <thead>
    <tr>
     
      <th scope="col">Manufacturer</th>
      <th scope="col">Model</th>
      <th scope="col">Type</th>
      <th scope="col">Price</th>
      <th scope="col">Engine_size</th>
      <th scope="col">Horsepower</th>
      <th scope="col">Wheelbase</th>
      <th scope="col">Fuel_capacity</th>
      <th scope="col">fuel_efficiency</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($cars as $car)
    <tr>
      <th scope="row">{{$car->manufacturer->manufacturer}}</th>
      <th scope="row">{{$car->model->model}}</th>
      <th scope="row">{{$car->type->type}}</th>
      <th scope="row">{{$car->price}}</th>
      <th scope="row">{{$car->engine_size}}</th>
      <th scope="row">{{$car->horsepower}}</th>
      <th scope="row">{{$car->wheelbase}}</th>
      <th scope="row">{{$car->fuel_capacity}}</th>
      <th scope="row">{{$car->fuel_efficiency}}</th>
      

    </tr>
    @endforeach
   
  </tbody>
</table>
    </div>
</div>
@endsection
