@extends('layouts.app')
<?php

$user = \Auth::user();
$primes = \App\Prime::all();

?>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$prime->name}}</div>

                    <div class="panel-body">
                        <form id="profileform" class="form-horizontal" role="form" method="POST" action='{{ url("/primes/prime_$prime->id")}}' enctype="multipart/form-data">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label class="col-md-4 control-label"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Silo Name</label>
                                <div class="col-md-6">
                                    <input type="text" name="cprimesiloname" value="{{$prime->name}}" class="input form-control" style="border: none;">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Quantity</label>
                                <div class="col-md-6">
                                    <input type="text" name="cprimesiloquantity" value="{{$prime->quantity}}" class="input form-control" style="border: none;">
                                </div>
                            </div>

                            <input type="hidden" value="{{csrf_token()}}" name="_token">                      <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" name="changeprime" class="btn btn-primary">
                                        Change
                                    </button>
                                    <button type="submit" class="btn btn-primary" name="delete">
                                        Delete {{$prime->name}}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection