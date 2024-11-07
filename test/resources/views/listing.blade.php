<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Listing</title>
<a href="{{ '/create' }}">Add</a>
        
    </head>
    <body>
	<p>@if($message=Session::get('success'))
		
		{{ $message }}
	
	@endif</p>
       <h1>Listing </h1>
	   
	   
	   <table>
	   <tr><th>Id</th><th>Name</th><th>State</th><th>Zip</th><th>Amount</th><th>Qty</th><th>Item</th><th>Action</th></tr>
	   
	   
	   @foreach($listings as $list)
	   <tr><td>{{ $list->id}}</td><td>{{ $list->name}}</td><td>{{ $list->state}}</td><td>{{ $list->zip}}</td><td>{{ $list->amount}}</td><td>{{ $list->qty}}</td><td>{{ $list->item}}</td><td><a href="{{'/edit/'.$list->id}}">Edit</a> | <a href="{{'/delete/'.$list->id}}">Delete</a></td></tr>
	   
	   @endforeach
	   
	   </table>
	   
    </body>
</html>
