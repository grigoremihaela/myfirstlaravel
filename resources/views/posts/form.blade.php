<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('summary', 'summary:') !!}
    {!! Form::text('summary', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::text('content', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('tags', 'Tags:') !!}
    {!! Form::select('tags[]', $tags, $post->tags->lists('id')->all(), ['id' => 'tags', 'class' => 'form-control', 'multiple']) !!}
</div>

<div class="form-group">  
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>
