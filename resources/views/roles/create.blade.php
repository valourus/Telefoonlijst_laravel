@extends("layouts.app")

@section("content")
    <div class="container">
        <h1>Create Role</h1>
        {!! Form::open(["action" => ["RolesController@createRole"], "method" => "Post"]) !!}
        <div class="form-group">
            {{ Form::label("role name", null, ["class" => "control-label"]) }}
            {{ Form::text("name", null, ["class" => "form-control"]) }}
        </div>
        <div class="form-group">
            <input type="submit" name="submit" value="submit" class="btn btn-primary" >
        </div>
        {!! Form::close() !!}
    </div>
    <div class="container">
        <h1>Create permission</h1>
        {!! Form::open(["action" => ["RolesController@createPermission"], "method" => "Post"]) !!}
        <div class="form-group">
            {{ Form::label("role name", null, ["class" => "control-label"]) }}
            {{ Form::text("name", null, ["class" => "form-control"]) }}
        </div>
        <div class="form-group">
            <input type="submit" name="submit" value="submit" class="btn btn-primary" >
        </div>
        {!! Form::close() !!}
    </div>
@endsection

