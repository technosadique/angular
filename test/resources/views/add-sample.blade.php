<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Add sample</title>

        
    </head>
    <body>
       <h1>Add sample </h1>
	   <form method="post" action="{{'store'}}">
	   <table>
	   {{ csrf_field() }}
	   <tr>
	   <th>Name</th><td><input type="text" name="name" value="{{ old('name') }}">
	   
	   </td>
	   
	   </tr>
	   
	   <tr>
	   <td></td><td>@error('name')
	    <span>
	  {{ $message }}
	   </span>
	   @enderror</td>
	   </tr>
	   
	    <tr>
	   <th>State</th><td><input type="text" name="state" value="{{ old('state') }}"></td>
	   </tr>
	   	   <tr>
	   <td></td><td>@error('state')
	    <span>
	  {{ $message }}
	   </span>
	   @enderror</td>
	   </tr>
	   
	    <tr>
	   <th>Zip</th><td><input type="text" name="zip" value="{{ old('zip') }}"></td>
	   </tr>
	   	  
		  
		  <tr>
	   <td></td><td>@error('zip')
	    <span>
	  {{ $message }}
	   </span>
	   @enderror</td>
	   </tr>
		  
	    <tr>
	   <th>Amount</th><td><input type="text" name="amount" value="{{ old('amount') }}"></td>
	   </tr>
	   	   
		   <tr>
	   <td></td><td>@error('amount')
	    <span>
	  {{ $message }}
	   </span>
	   @enderror</td>
	   </tr>
		   
	    <tr>
	   <th>Qty</th><td><input type="text" name="qty" value="{{ old('qty') }}"></td>
	   </tr>
	   	  <tr>
	   <td></td><td>@error('qty')
	    <span>
	  {{ $message }}
	   </span>
	   @enderror</td>
	   </tr>
	    <tr>
	   <th>Item</th><td><input type="text" name="item" value="{{ old('item') }}"></td>
	   </tr>
	   <tr>
	   <td></td><td>@error('item')
	    <span>
	  {{ $message }}
	   </span>
	   @enderror</td>
	   </tr>
	   
	    <tr>
	   <th></th><td><input type="submit" name="submit" value="Submit"></td>
	   </tr>
	   
	   </table>
	   
	   </form>
    </body>
</html>
