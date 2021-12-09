<div class="form-group">
    <label for="inputTitle">Titulo</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
    value={{old('title',$blog->title)}} required autocomplete="date" autofocus>
@error('title')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>

<div class="form-group">
    <label for="inputDescription">Descrição</label>
    <textarea class="form-control @error('content') is-invalid @enderror" name="content"
    value={{old('content',$blog->content)}} required autocomplete="date" autofocus>
@error('content')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>

<div class="form-group">
    <label for="datetime">Data</label>
    <input type="date" class="form-control @error('date') is-invalid @enderror" name="date"
    value={{old('date',$blog->date)}} required autocomplete="date" autofocus>
@error('date')
    <span class="invalid-feedback " role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>

<div class="form-group">
    <label for="inputImage">Imagem</label>
    <input type="file" class="form-control-file @error('image') is-invalid @enderror" name="image"
    value={{old('image',$blog->image)}} required autocomplete="date" autofocus>
@error('image')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
    <small id="fileHelp" class="form-text text-muted"> Faça upload de um arquivo de imagem válido. O tamanho da imagem não deve ser
        mais de 2 MB </small>
</div>

<div class="form-group">
    <label for="inputCategory">Categoria</label>
    <select name="category" id="inputCategory" class="form-control">

       @foreach ($categories as $category)
 <option {{ old('$category', $blog->category_id) == $category->id ? "selected":""}}
 value="{{$category->id}}">{{$category->name}}</option>
 @endforeach

    </select>
</div>
