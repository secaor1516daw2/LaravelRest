@extends('layouts/main') @section('wrapper')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form  method="POST" action="crearPlato" class="form-horizontal formulari">
                <div class="form-group">
                    <label for="nom" class="col-sm-2 control-label">Nom</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="nom" placeholder="Nom">
                    </div>
                </div>
                <div class="form-group">
                    <label for="descripcio" class="col-sm-2 control-label">Descripcio</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="descripcio" placeholder="Descripció">
                    </div>
                </div>
                <div class="form-group">
                    <label for="preu" class="col-sm-2 control-label">Preu</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="preu" placeholder="Preu">
                    </div>
                </div>
                <div class="form-group">
                    <label for="tipus" class="col-sm-2 control-label">Tipus:</label>
                    <div class="col-sm-5">
                        <select name="tipus" class="form-control" id="tipus">
                            @foreach($plats as $plat)
                            <option>{{$plat}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
