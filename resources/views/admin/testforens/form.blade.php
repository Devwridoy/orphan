<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($testforen->name) ? $testforen->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('details') ? 'has-error' : ''}}">
    <label for="details" class="control-label">{{ 'Details' }}</label>
    <textarea class="form-control" rows="5" name="details" type="textarea" id="details" >{{ isset($testforen->details) ? $testforen->details : ''}}</textarea>
    {!! $errors->first('details', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('age') ? 'has-error' : ''}}">
    <label for="age" class="control-label">{{ 'Age' }}</label>
    <input class="form-control" name="age" type="text" id="age" value="{{ isset($testforen->age) ? $testforen->age : ''}}" >
    {!! $errors->first('age', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('contact') ? 'has-error' : ''}}">
    <label for="contact" class="control-label">{{ 'Contact' }}</label>
    <input class="form-control" name="contact" type="text" id="contact" value="{{ isset($testforen->contact) ? $testforen->contact : ''}}" >
    {!! $errors->first('contact', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('avatar') ? 'has-error' : ''}}">
    <label for="avatar" class="control-label">{{ 'Avatar' }}</label>
    <input class="form-control" name="avatar" type="file" id="avatar" value="{{ isset($testforen->avatar) ? $testforen->avatar : ''}}" >
    {!! $errors->first('avatar', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
