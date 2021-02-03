@extends(config('settings.view.extends'))

@section('content')
<div id="content">
  <form action="{{route('globusgroup.LaravelSettingsManager.post')}}" method="post">
    @csrf
    <div class="container-fluid">

      <div class="row">
        <div class="col-6 offset-3">

          <div class="card mb-5">
            <div class="row">
              <div class="col text-right pt-2 pr-4">
                <button class="btn btn-primary btn-sm">Save All</button>
              </div>
            </div>
            <div class="card-body">
              @foreach(config('settings.available_settings') as $setting)
                <x-dynamic-component 
                  :component="'settings::' . $setting['type']"
                  :key="$setting['key']"
                  :type="$setting['type']"
                  :label="$setting['label']"
                  :help="$setting['help']"
                />
              @endforeach

            </div>
          </div>

        </div>

        <div class="col">
          
          <div class="card sticky-top">
            <div class="card-body">
              <h5>Jump To</h5>
              <ul class="list-unstyled">
                @foreach(config('settings.available_settings') as $setting)
              <li>
                <a href="#{{$setting['key']}}">{{$setting['label']}}</a>
              </li>
              @endforeach
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>
  </form>
</div>
@endsection