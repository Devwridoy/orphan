<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($orphanss->name) ? $orphanss->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('details') ? 'has-error' : ''}}">
    <label for="details" class="control-label">{{ 'Details' }}</label>
    <textarea class="form-control" rows="5" name="details" type="textarea" id="details" >{{ isset($orphanss->details) ? $orphanss->details : ''}}</textarea>
    {!! $errors->first('details', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('age') ? 'has-error' : ''}}">
    <label for="age" class="control-label">{{ 'Age' }}</label>
    <input class="form-control" name="age" type="text" id="age" value="{{ isset($orphanss->age) ? $orphanss->age : ''}}" >
    {!! $errors->first('age', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('avatar') ? 'has-error' : ''}}">
    <label for="avatar" class="control-label">{{ 'Avatar' }}</label>
    <input class="form-control" name="avatar" type="file" id="avatar" value="{{ isset($orphanss->avatar) ? $orphanss->avatar : ''}}" >
    {!! $errors->first('avatar', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('ins_id') ? 'has-error' : ''}}">
    <label for="ins_id" class="control-label">{{ 'Ins Id' }}</label>
    <input class="form-control" name="ins_id" type="number" id="ins_id" value="{{ isset($orphanss->ins_id) ? $orphanss->ins_id : ''}}" >
    {!! $errors->first('ins_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
