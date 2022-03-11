<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-12">
    {!! Form::label('permissions', 'Permissions:') !!}
    @foreach($role->permissions as $role_permission)
        <?php 
             $roles[]= $role_permission->name;
        ?>
    @endforeach

        @foreach($permissions as $permission)
        </br>
        {{ Form::checkbox('permissions[]', $permission->name,in_array($permission->name,$roles) ? true : '') }}
        <span>{{$permission->name}}</span>
        @endforeach
    
</div>