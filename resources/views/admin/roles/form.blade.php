
<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">{{ trans('roles.name') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="role_name" type="text" id="name" value="{{ old('name', optional($role)->name) }}" minlength="1" maxlength="255" required="true" placeholder="{{ trans('roles.name__placeholder') }}">
        {!! $errors->first('name', '<p class="help-block"  style="color:red;">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('guard_name') ? 'has-error' : '' }}">
    <label for="guard_name" class="col-md-2 control-label">{{ trans('roles.guard_name') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="guard_name" type="text" id="guard_name" value="web" minlength="1" maxlength="255" required="true" placeholder="{{ trans('roles.guard_name__placeholder') }}" readonly="true">
        {!! $errors->first('guard_name', '<p class="help-block"  style="color:red;">:message</p>') !!}
    </div>
</div>
<div class="ml-2 mr-2">
    <!-- TODO: Disable editing permissions for your account
        e.g 'options' => ['disabled'] at admin
    -->
    @if(isset($role->name))

        @if($role->name === 'Admin')

            @include('admin.roles.partials._permissions', [
                        'title' => $role->name .' Permissions'
                         ])
        @else
            @include('admin.roles.partials._permissions', [
                        'title' => $role->name .' Permissions',
                        'model' => $role ])
        @endif
    @else
        @include('admin.roles.partials._permissions', [
            'title' => 'Select Permissions',
            'model' => 'New' ])
    @endif
</div>
