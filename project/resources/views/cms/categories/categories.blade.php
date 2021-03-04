   @extends('cms.cms_master')
   @section('cms_content')
   <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       <h1 class="h2">Edit Site Categories</h1>



   </div>
   <div class="row">
       <div class="col-md-12">
           <p>
               <a class="btn btn-primary" href="{{ url('cms/categories/create') }}">+ Add new category </a>
           </p>

       </div>
   </div>
   <div class="row">
       <div class="col-md-6">
           <table class="table table-border">
               <thead>
                   <tr>
                       <th>Title</th>
                       <th>category image</th>
                       <th>Updated At</th>
                       <th>Operation</th>
                   </tr>
               </thead>
               <tbody>
                   @foreach($categories as $item)
                   <tr>
                       <td>{{ $item['title'] }}</td>
                       <td><img src="{{ asset('images/categories/' . $item['image']) }}" width="30" alt=""></td>
                       <td>{{ $item['updated_at'] }}</td>
                       <td>
                           <a href="{{ url('cms/categories/' . $item['id'] . '/edit') }}">Edit</a> |

                           <a href="{{ url('cms/categories/' . $item['id'])}}"><img width="12"
                                   src="{{url('images/icons/trash-blue.png')}}" alt="">
                           </a>

                       </td>
                   </tr>

                   @endforeach
               </tbody>
           </table>
       </div>
   </div>

   @endSection
