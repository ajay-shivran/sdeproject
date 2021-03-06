{{-- This program has been developed by students from the bachelor Computer Science 
at Utrecht University within the Software and Game project course (2018)
┬ęCopyright Utrecht University (Department of Information and Computing Sciences) --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Do you really want to delete this problem?</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('problem.delete', ['id' => $problem->id]) }}">
                        {{ csrf_field() }}
                            <div class="col-md-6 col-md-offset-4">
                            	<button type="button" onclick="window.location.href='/problem/{{$problem->id}}'">
                                    Cancel
                                </button>
                                <button type="submit" class="btn btn-primary" color="FF0000">
                                    Delete problem!
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
