@props(['key','label','help','type'])

<div class="form-group">
  <input type="hidden" name="settings[{{$key}}][key]" value="{{$key}}">
  <input type="hidden" name="settings[{{$key}}][type]" value="{{$type}}">
  <input type="hidden" name="settings[{{$key}}][label]" value="{{$label}}">

  <label for="{{$key}}" style="font-weight: bold;">{{$label}}</label>
  @if(isset($help))
  <p class="text-muted">{{$help}}</p>
  @endif
  <input type="color" class="form-control" name="settings[{{$key}}][value]" id="{{$key}}" value="{{setting($key)}}">
  <p class="text-muted text-right"><small>Setting Key: {{$key}}</small></p>
</div>