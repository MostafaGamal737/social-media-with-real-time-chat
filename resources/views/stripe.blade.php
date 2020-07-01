<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="stripe" method="post">
      @csrf
<input type="checkbox" id="vehicle1" name="val[]" value="Bike">
<label for="vehicle1"> I have a bike</label><br>
<input type="checkbox" id="vehicle2" name="val[]" value="Car">
<label for="vehicle2"> I have a car</label><br>
<input type="checkbox" id="vehicle3" name="val[]" value="Boat">
<label for="vehicle3"> I have a boat</label><br>
<button type="submit" name="button">add</button>
    </form>
  </body>
</html>
