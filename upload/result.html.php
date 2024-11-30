<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Image Upload</title>
   <style>
      body {
         font-family: Arial, sans-serif;
         background-color: #f2f2f2;
         margin: 0;
         padding: 0;
         display: flex;
         justify-content: center;
         align-items: center;
         height: 100vh;
      }

      .result-container {
         background-color: #ffffff;
         padding: 20px;
         border-radius: 5px;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
         text-align: center;
         color: red;
         font-size: 200%;
      }
   </style>
</head>

<body>
   <div class="result-container">
      <?php echo $result; ?>
   </div>
</body>

</html>