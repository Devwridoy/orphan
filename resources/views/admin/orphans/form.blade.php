<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($orphan->name) ? $orphan->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('details') ? 'has-error' : ''}}">
    <label for="details" class="control-label">{{ 'Details' }}</label>
    <textarea class="form-control" rows="5" name="details" type="textarea" id="details" >{{ isset($orphan->details) ? $orphan->details : ''}}</textarea>
    {!! $errors->first('details', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('age') ? 'has-error' : ''}}">
    <label for="age" class="control-label">{{ 'Age' }}</label>
    <input class="form-control" name="age" type="text" id="age" value="{{ isset($orphan->age) ? $orphan->age : ''}}" >
    {!! $errors->first('age', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('avatar') ? 'has-error' : ''}}">
    <label for="avatar" class="control-label">{{ 'Avatar' }}</label>
    <input class="form-control" name="avatar" type="file" id="avatar" value="{{ isset($orphan->avatar) ? $orphan->avatar : ''}}" >
    {!! $errors->first('avatar', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('inistitute_id') ? 'has-error' : ''}}">
    <label for="inistitute_id" class="control-label">{{ 'Inistitute Id' }}</label>
    <input class="form-control" name="inistitute_id" type="number" id="inistitute_id" value="{{ isset($orphan->inistitute_id) ? $orphan->inistitute_id : ''}}" >
    {!! $errors->first('inistitute_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
