@props(['key','label','help','type'])

<div class="form-group">
  <input type="hidden" name="settings[{{$key}}][key]" value="{{$key}}">
  <input type="hidden" name="settings[{{$key}}][type]" value="{{$type}}">
  <input type="hidden" name="settings[{{$key}}][label]" value="{{$label}}">

  <label for="{{$key}}" style="font-weight: bold;">{{$label}}</label>
  @if(isset($help))
  <p class="text-muted">{{$help}}</p>
  @endif
  <textarea name="settings[{{$key}}][value]" id="{{$key}}" rows="5" class="form-control">{{setting($key)}}</textarea>
  <p class="text-muted text-right"><small>Setting Key: {{$key}}</small></p>
</div>