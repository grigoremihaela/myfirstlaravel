<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
     @if ($errors->has('title')) <p class="help-block">{{ $errors->first('title') }}</p> @endif
</div>

<div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
     @if ($errors->has('slug')) <p class="help-block">{{ $errors->first('slug') }}</p> @endif
</div>

<div class="form-group {{ $errors->has('summary') ? 'has-error' : '' }}">
    {!! Form::label('summary', 'summary:') !!}
    {!! Form::text('summary', null, ['class' => 'form-control']) !!}
     @if ($errors->has('summary')) <p class="help-block">{{ $errors->first('summary') }}</p> @endif
</div>

<div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::text('content', null, ['class' => 'form-control']) !!}
     @if ($errors->has('content')) <p class="help-block">{{ $errors->first('content') }}</p> @endif
</div>

<div class="form-group ">
    {!! Form::label('tag_list', 'Tags:') !!}
    {!! Form::select('tag_list[]', $tags, null, ['id' => 'tag_list', 'class' => 'form-control', 'multiple']) !!}
</div>

<div class="form-group">  
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>
