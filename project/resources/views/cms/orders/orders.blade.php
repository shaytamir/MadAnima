   @extends('cms.cms_master')
   @section('cms_content')
   <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       <h1 class="h2">MelamedAnimations Site Orders</h1>
   </div>

   <div class="row">
       <div class="col-md-12">
           <table class="table table-border">
               <thead>
                   <tr>
                       <th>User</th>
                       <th>Order Details</th>
                       <th>Total</th>
                       <th>Date</th>
                   </tr>
               </thead>
               <tbody>
                   @foreach($orders as $order)
                   <tr>
                       <td>{{ $order->name }}</td>

                       <td>
                           <ul>
                               @foreach(unserialize($order->data) as $item )
                               <li><b>Name: </b>{{$item['name']}}, <b>Price:</b> {{$item['price']}}$, <b>Quantity:
                                   </b>{{$item['quantity']}}
                               </li>

                               @endforeach
                           </ul>

                       </td>
                       <td>{{ $order->total }}</td>
                       <td>{{ $order->created_at }}</td>

                   </tr>

                   @endforeach
               </tbody>
           </table>
       </div>
   </div>

   @endSection