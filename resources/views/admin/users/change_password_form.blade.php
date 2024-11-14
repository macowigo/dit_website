<div class="form-group {{ $errors->has('old_password') ? 'has-error' : '' }}">
    <label for="old_password" class="col-md-4 control-label">Current Password</label>
    <div class="col-md-10">
        <input class="form-control" name="old_password" type="password" id="old_password" value="" placeholder="Old Password">
        {!! $errors->first('old_password', '<p class="help-block"  style="color:red;">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
    <label for="password" class="col-md-4 control-label">New {{ trans('users.password') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="password" type="password" id="password" value="" placeholder="New Password">
        {!! $errors->first('password', '<p class="help-block"  style="color:red;">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
    <label for="password" class="col-md-4 control-label">Confirm New {{ trans('users.password') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="password_confirmation" type="password" id="password" value="" placeholder="Confirm New Password">
        {!! $errors->first('password', '<p class="help-block"  style="color:red;">:message</p>') !!}
    </div>
</div>
