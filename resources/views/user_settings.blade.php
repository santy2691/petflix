@extends('layouts.main')

@section('content')
<div class="separador"></div>

<div class="container contenedor mt-1 mb-3">
    <div class="card-body">
      <form class=" d-flex flex-wrap" action="settings" method="post">
        <div class="datos">
            <h3>Edit Profile</h3>
            <div class="form-campo row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="name" name="text" value="{{Auth::user()->email}}">
                </div>
            </div>
            <div class="form-campo mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="name" name="name" value="{{Auth::user()->name}}">
                </div>
            </div>

            <div class="form-campo mb-3 row">
                <label for="lastName" class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="lastName" name="lastName" value="{{Auth::user()->lastName}}">
                </div>
            </div>

            <div class="form-campo mb-3 row">
                <label for="password" class="col-sm-2 col-form-label">password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="lastName" name="password" value="password">
                </div>
            </div>
          <div class="mt-3">
            <input type="submit" value="save Changes" class="btn btn-primary">
          </div>
        </div>
    </form>
    </div>
</div>
@endsection