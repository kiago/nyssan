<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Sortable - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

  <!-- upload scripts-->
  <!-- Google web fonts -->
  <link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel='stylesheet' />

  <!-- The main CSS file -->
  <link href="assets_galerie/css/styleupload.css" rel="stylesheet" />


  <style>
  #sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
  #sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
  #sortable li span { position: absolute; margin-left: -1.3em; }
  </style>
  <script>
  $(function() {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
  });
  </script>
</head>
<body>




<form id="upload" method="post" action="upload.php" enctype="multipart/form-data">
  <div id="drop">
    Drop Here

    <a>Browse</a>
    <input type="file" name="upl" multiple />
  </div>

  <ul id="sortable">
    <!-- The file uploads will be shown here -->
    <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 1</li>

  </ul>
</form>


</body>



<!-- upload scripts-->
<!-- JavaScript Includes -->
<script src="assets_galerie/js/jquery.knob.js"></script>

<!-- jQuery File Upload Dependencies -->
<script src="assets_galerie/js/jquery.ui.widget.js"></script>
<script src="assets_galerie/js/jquery.iframe-transport.js"></script>
<script src="assets_galerie/js/jquery.fileupload.js"></script>

<!-- Our main JS file -->
<script src="assets_galerie/js/script.js"></script>

</html>
