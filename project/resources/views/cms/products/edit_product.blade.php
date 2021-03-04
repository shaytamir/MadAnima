   @extends('cms.cms_master')
   @section('cms_content')
   <div class="row">
       <div class="col-md-12">
           <h1>Edit this product - </h1>
       </div>

   </div>
   <div class="row">
       <div class="col-md-6">
           <form action="{{ url('cms/products/' . $product['id']) }}" method="POST" novalidate
               enctype="multipart/form-data">
               {{ csrf_field() }}
               {{method_field('PUT')}}
               <input type="hidden" name="item_id" value="{{$product['id']}}">


               <div class="mb-3 form-group">
                   <label for="categorie_id" class="form-label">Category:</label>
                   <select name="categorie_id" id="categorie_id" class="form-control">

                       @foreach($categories as $item)
                       <option @if($product['categorie_id']==$item['id'] ) selected="selected" @endif
                           value="{{$item['id']}}">
                           {{$item['title']}}</option>
                       @endforeach
                   </select>

                   <!-- <span class="text-danger">{{$errors->first('title')}}</span> -->
               </div>




               <div class="mb-3">
                   <label for="title" class="form-label">Title</label>
                   <input type="text" name="title" placeholder="Title" value="{{ $product['title'] }}"
                       class="form-control origin_text" id="title">
               </div>
               <div class="mb-3">
                   <label for="url" class="form-label">Url</label>
                   <input type="text" name="url" placeholder="url" value="{{ $product['url'] }}"
                       class="form-control target_text" id="url">
               </div>
               <div class="mb-3 form-group">
                   <label for="article" class="form-label">Content:</label>
                   <textarea id="article" name="article" placeholder="Write your content here..."
                       class="form-control">{{ $product['article'] }}</textarea>
               </div>
               <div class="mb-3 form-group">
                   <label for="price" class="form-label">Price:</label>
                   <input type="price" name="price" placeholder="Product Price" value="{{ $product['price'] }}"
                       class="form-control" id="price">
               </div>

               <div class="mb-3">
                   <img width="80" src="{{asset('images/products/' . $product['image'] ) }}" alt="">
                   <br><br>
                   <label for="image" class="form-label">Change Product Image</label>
                   <input type="file" name="image" id="image">
               </div>




               <a href="{{ url('cms/products') }}" type="button" name="cencel" class="btn btn-secondary">Cencel</a>
               <button type="submit" name="submit" class="btn btn-primary">Save</button>

           </form>
       </div>
   </div>


   @endsection