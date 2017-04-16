@extends('admin.layout.admin')

@section('content')

    <div class="col-lg-12">
                        <h1 class="page-header">Article
                            <small>List</small>
                        </h1>
                        <div class="collapse navbar-collapse" id="navbar-collapse">

          <div class="nav navbar-right navbar-btn">
            <a href="{{ route('article.create') }}" class="btn btn-default">
              <i class="glyphicon glyphicon-plus"></i>
              Add Article
            </a>
          </div>
          {!! Form::open(['route' => 'article.index', 'method' => 'GET', 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}
            
            <div class="input-group">
              {!! Form::text('term', Request::get('term'), ['class' => 'form-control', 'placeholder' => 'Search...', 'id' => 'term']) !!}              
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit">
                  <i class="glyphicon glyphicon-search"></i>
                </button>
              </span>
            </div>
          {!! Form::close() !!}
        </div>
                    </div>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Title</th>
                                <th>Date</th>
                                <td>Category</td>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $stt=0 ?>
                            @forelse($articles as $article)
                            <?php $stt=$stt+1?>
                            <tr class="odd gradeX" align="center">
                                <td>{!! $stt !!}</td>
                                <td>{!! $article["title"] !!}</td>
                                <td>
                                    {!! \Carbon\Carbon::createFromTimeStamp(strtotime($article["created_at"]))->diffForHumans() !!}
                                    </td>
                              
                                    <td>
                                    {{count($article->category)?$article->category->name:"N/A"}}
                                    </td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i>
                                {!! Form::open(['route' => ['article.destroy', $article->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-circle btn-danger btn-xs" title="Delete" onclick="return confirm('Are you want to delete this article ?')">
              <i class="glyphicon glyphicon-remove"></i>
            </button>
                                    {!! Form::close() !!}
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> 
                                    {!! Form::open(['route' => ['article.edit', $article->id], 'method' => 'EDIT']) !!}
                                    <a href="{{ route('article.edit', ['id' => $article->id]) }}" class="btn btn-circle btn-default btn-xs" title="Edit">
                                    <i class="glyphicon glyphicon-edit"></i>
                                        </a>
                                </td>
                            </tr>
                            @empty

                                    <h3>No articles</h3>
                            @endforelse
                        </tbody>
                    </table>
<div class="text-center">
    <nav>
      {!! $articles->appends( Request::query() )->render() !!}
    </nav>
</div>

@endsection