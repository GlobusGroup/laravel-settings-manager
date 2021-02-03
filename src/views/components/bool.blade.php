@props(['key','label','help','type'])

<input type="hidden" name="settings[{{$key}}][key]" value="{{$key}}">
<input type="hidden" name="settings[{{$key}}][type]" value="{{$type}}">
<input type="hidden" name="settings[{{$key}}][label]" value="{{$label}}">
<div class="form-check">
  <input type="checkbox" class="form-check-input" name="settings[{{$key}}][value]" id="{{$key}}" @if(setting($key))checked @endif value="true"> 
  <label class="form-check-label" for="{{$key}}">{{$label}}</label>

</div>
@if(isset($help))
<p class="text-muted">{{$help}}</p>
@endif
<p class="text-muted text-right"><small>Setting Key: {{$key}}</small></p>