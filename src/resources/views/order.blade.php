<!DOCTYPE html>
<html>
<body>

<h2>contact Forms </h2>
<a href="{{route('contact')}}">Go to Contacts</a>
<form method="POST" action="{!! route('order') !!}">
@csrf
  <label for="order_price">Order name:</label><br>
  <input type="text" id="order_name" name="order_name" value=""><br>
  <label for="order_price">Order price:</label><br>
  <input type="text" id="order_price" name="order_price" value=""><br><br>
  <input type="submit" value="Submit">
</form> 

<!-- <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p> -->

</body>
</html>

