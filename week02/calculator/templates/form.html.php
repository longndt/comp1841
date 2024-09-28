<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Form</title>
   <style>
      body {
         background-color: antiquewhite;
      }

      input:focus {
         background-color: aqua;
      }
   </style>
</head>

<body>
   <form action="" method="post">
      Value 1: <input type="text" name="val1" required>
      <br><br>
      Value 2: <input type="text" name="val2" required>
      <hr>
      Calculation
      <br>
      <input type="radio" name="calc" value="add">
      Add
      <input type="radio" name="calc" value="sub">
      Subtract
      <input type="radio" name="calc" value="mul">
      Multiply
      <input type="radio" name="calc" value="div">
      Divide
      <input type="radio" name="calc" value="mod">
      Modulus
      <br>
      <input type="submit" value="Calculate">
      <input type="reset" value="Clear">
   </form>
</body>

</html>