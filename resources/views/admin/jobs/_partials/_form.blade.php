<div class="row mb-3">
    <div class="col-sm-12 col-md-9">
        @include('admin._partials._lang_tabs')

        <div class="tab-content mb-4">
            @foreach(config('settings.languages') as $key => $lang)
                <div class="tab-pane p-3 {{ $loop->first ? 'active' : '' }}" id="{{ $key }}" role="tabpanel">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Názov {{ strtoupper($key) }}</label>
                                <input name="name_{{ $key }}" type="text" value="{{ old("name_$key", isset($job) ? $job->{"name_$key"} : '') }}" class="form-control {{ $errors->has("name_$key") ? 'parsley-error' : '' }}">
                                @include('admin._partials._errors', ['column' => "name_$key"])
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Čo ponúkame {{ strtoupper($key) }}</label>
                                <textarea name="offer_{{ $key }}" class="form-control tinymce {{ $errors->has("offer_$key") ? 'parsley-error' : '' }}">{{ old("offer_$key", isset($job) ? $job->{"offer_$key"} : '') }}</textarea>
                                @include('admin._partials._errors', ['column' => "offer_$key"])
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Čo požadujeme {{ strtoupper($key) }}</label>
                                <textarea name="requirements_{{ $key }}" class="form-control tinymce {{ $errors->has("requirements_$key") ? 'parsley-error' : '' }}">{{ old("requirements_$key", isset($job) ? $job->{"requirements_$key"} : '') }}</textarea>
                                @include('admin._partials._errors', ['column' => "requirements_$key"])
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Pracovná náplň {{ strtoupper($key) }}</label>
                                <textarea name="description_{{ $key }}" class="form-control tinymce {{ $errors->has("description_$key") ? 'parsley-error' : '' }}">{{ old("description_$key", isset($job) ? $job->{"description_$key"} : '') }}</textarea>
                                @include('admin._partials._errors', ['column' => "description_$key"])
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>
