<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($inistitute->name) ? $inistitute->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Address') ? 'has-error' : ''}}">
    <label for="Address" class="control-label">{{ 'Address' }}</label>
    <input class="form-control" name="Address" type="text" id="Address" value="{{ isset($inistitute->Address) ? $inistitute->Address : ''}}" >
    {!! $errors->first('Address', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('contact') ? 'has-error' : ''}}">
    <label for="contact" class="control-label">{{ 'Contact' }}</label>
    <input class="form-control" name="contact" type="text" id="contact" value="{{ isset($inistitute->contact) ? $inistitute->contact : ''}}" >
    {!! $errors->first('contact', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('avatar') ? 'has-error' : ''}}">
    <label for="avatar" class="control-label">{{ 'Avatar' }}</label>
    <input class="form-control" name="avatar" type="file" id="avatar" value="{{ isset($inistitute->avatar) ? $inistitute->avatar : ''}}" >
    {!! $errors->first('avatar', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
