#!/usr/local/bin/php

<html>
<head>
   <title>PHP Test</title>
   <!-- Bootstrap-->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
   <div class="container">

      <div class="page-header">
         <h1>Print Files</h1>
      </div>

      <form>
         <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
         </div>
         <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
         </div>
         <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" id="exampleInputFile">
            <p class="help-block">Example block-level help text here.</p>
         </div>
         <div class="checkbox">
            <label>
               <input type="checkbox"> Check me out
            </label>
         </div>
         <button type="submit" class="btn btn-default">Submit</button>
      </form>
   </div>

   <!-- Bootstrap JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>
