<DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add a product</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<h1> Create a new product </h1>
<form method="POST" action='/products'>
    <div>
        <textarea style='resize:none' rows='2' cols='20' name='name'></textarea>
        <div class="text-danger"></div>
    </div>
    <div>
        <input type="number" style='resize:none' rows='2' cols='20' name='price'/> 
    </div>
    <div>
        <textarea style='resize:none' rows='2' cols='20' name='description'></textarea>
    </div>
    <div>
        <input type="number" style='resize:none' rows='2' cols='20' name='in_stock'/> 
    </div>
    <div>
        <input type= 'submit' class='btn btn-success' name='save' value='Save'> 
    </div>
</form>
</body>
</html>