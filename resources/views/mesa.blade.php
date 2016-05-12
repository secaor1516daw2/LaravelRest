@extends('layouts/main') @section('wrapper')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form class="form-horizontal formulari">
                <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="nombre" placeholder="Nombre">
                    </div>
                </div>
                <div class="form-group">
                    <label for="mesa" class="col-sm-2 control-label">Número de mesa</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="mesa" placeholder="nº de mesa">
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
