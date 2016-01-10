<div class="form-group">
    {!! Form::label('Title', "Title:") !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Body', "Body:") !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('published_at', "Publish On:") !!}
    {!! Form::input('date', 'published_at', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('tag_list', "Tags:") !!}
    {!! Form::select('tag_list[]', $tags, null, ['class' => 'form-control', 'multiple']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'form-control btn btn-success']) !!}
</div>