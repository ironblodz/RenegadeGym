@extends ("layout.admin")


@section("content")
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Blog</h1>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a class="btn btn-primary" href="{{route('blogs.create')}}">
        <i class="fas fa-plus"></i> Add Blog
      </a>
    </div>
    <div class="card-body">
      @if(count($blogs))
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Imagem</th>
              <th>Titulo</th>
              <th>Descriçao</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($blogs as $blog)
            <tr>
              <td>
                @if ($blog->image)
                <img src="{{asset('storage/posts_images/'.$post->image)}}"
                class="img-post" alt="Post image">
                Ficha 4 – Laravel Página 25
                @else
                <img src="{{asset('img/no-image.png')}}" class="img-post" alt="Post image">
                @endif
                <td>{{$blog->title}}</td>
                <td>{{$blog->content}}</td>

                <td nowrap>
                  <a class="btn btn-xs btn-danger btn-p" href="{{route('blogs.show',$blog)}}"><i class="fas fa-eye fa-xs"></i></a>
                  <a class="btn btn-xs btn-danger btn-p" href="{{route('blogs.edit',$blog)}}"><i class="fas fa-pen fa-xs"></i></a>
                <form method="POST" action="{{route('blogs.destroy',$blog)}}" role="form" class="inline" onsubmit="return confirm('Are you sure you want to delete this record?');">
                 @csrf
                 @method("DELETE")
                 <button type="submit" class="btn btn-xs btn-danger btn-p"><i class="fas fa-trash fa-xs"></i></button>
               </form>
             </td>
           </tr>
           @endforeach
         </tbody>
       </table>
     </div>
      @else
 <h6>No blogs registered</h6>
 @endif
   </div>
 </div>
</div>
@endsection

@section("moreScripts")
<script>
  $('#dataTable').dataTable( {
    destroy: true,
    "order": [[ 1, 'desc' ]],
    "columns": [
    { "orderable": false },
    null,
    null,
    null,
    { "orderable": false },
    { "orderable": false }
    ]
  } );

</script>
@endsection
