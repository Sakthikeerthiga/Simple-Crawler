<?php
require_once __DIR__ . '/vendor/autoload.php';


$target_url = isset($_GET['target_url']) ? $_GET['target_url'] : '';

 if (isset($_GET['target_url'])) {
    Sakthi\Square::area($target_url);
  }
  // else {
  //   echo "Please provide a valid url!\n";
  // }

?>


  <!DOCTYPE html>
<html lang="en">
<head>
     <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta charset="utf-8">


    <style>
        ul li a, .meta td {
            font-size: 10px;
        }

        .images {
            margin-left: 0px;
        }

        .images img {
            margin: 5px;
            max-width: 50px;
            max-height: 50px;
        }

        small.error {
            color: red;
            font-size: 10px;
        }

        .input-append select.link-type {
            width: 100px;
            font-size: 10px;
            height: 20px;
        }

        h3.title {
            border-bottom: 1px solid #c0c0c0;
        }
    </style>
</head>
<body>
  <div class="jumbotron text-center">
  <h1>crawler</h1>
</div>
<div class="container">
  <div class="row">
   <div class="col-xs-4 col-sm-2 col-md-2 col-lg-2">

    </div>
    <div class="col-xs-4 col-sm-2 col-md-2 col-lg-2">

    Enter Crawl Url :-
    </div>
     <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
        <form method="get" action="">
            <div class="input-prepend input-append">
                <input class="span2 form-control" type="text" style="width: 550px;"
                       value="<?= $target_url ?>" name="target_url"
                       placeholder="Enter a website URL"/>
                       <em>ex:http://example.com</em>

         </div>
        </form>
       </div>
      </div>
     </div>
    </body>
 </html>

