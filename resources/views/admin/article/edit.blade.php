@extends('admin.layout.admin')

@section('content')

<style>
    .img_curent { width:150px; }
    .img_detail {width: 150px; margin-bottom: 10px;}
</style>
    <h3>Edit Article</h3>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {!! Form::model($article,['route' => ['article.update',$article->id], 'method' => 'PATCH', 'files' => true, 'data-parsley-validate'=>'']) !!}

            <div class="form-group">
                {{ Form::label('title', 'Title') }}
                {{ Form::text('title', null, array('class' => 'form-control','required'=>'','minlength'=>'4')) }}
            </div>

            <div class="form-group">
                {{ Form::label('description', 'Description') }}
                {{ Form::text('description', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('content', 'Content') }}
                {{ Form::text('content', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('category_id', 'Categories') }}
                 {!! Form::select("category_id", $categories, null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
            <label>Image Current</label> <br>
            <img src="{{asset('uploads/'.$article['image'])}}" class="img_curent" />
            <input type="hidden" name="img_current" value="{!! $article['image'] !!}">
       </div>

           <div class="form-group">
            <label>Choose Photo</label>
            {{ Form::file('image',array('class' => 'form-control')) }}
        </div>
        <button type="submit" class="btn btn-default">Article Edit</button>
        <button type="reset" class="btn btn-default">Reset</button>
        
</div>
            {!! Form::close() !!}

        </div>
    </div>



@endsection