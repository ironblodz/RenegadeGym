<div class="form-group">
    <label for="inputTitle">Title</label>
    <input type="text" class="form-control" name="title" id="inputTitle" value="{{old('title',$blog->title)}}" />
</div>

<div class="form-group">
    <label for="inputDescription">Description</label>
    <textarea class="form-control" name="description" id="inputDescription">{{old('description',$blog->description)}}</textarea>
</div>

<div class="form-group">
    <label for="inputImage">Image</label>
    <input type="file" class="form-control-file" name="image" id="inputImage" aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted"> Please upload a valid file image. Size of image should not be
        more than 2MB </small>
</div>

<div class="form-group">
    <label for="inputCategory">Category</label>
    <select name="category" id="inputCategory" class="form-control">
        
       @foreach ($categories as $category)
 <option {{ old('$category', $blog->category_id) == $category->id ? "selected":""}}
 value="{{$category->id}}">{{$category->name}}</option>
 @endforeach
 
    </select>
</div>
