<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>

    <link rel="stylesheet" type="text/css" href="http://keith-wood.name/js/jquery.signature.css">
    <title>Signature</title>
</head>
<body>
    <form action="{{ route('signature.upload') }}" method="post">
        @csrf
        <div id="sign"></div>
        <br>
        <textarea name="signed" id="signature" cols="30" rows="10"></textarea>
        <button id="clear">Clear</button>
        <button >Save</button>
    </form>
    
    <script>
        var sign = $('#sign').siganture({ syncField:'#signature', syncFormat:'PNG'});

    </script>
    
</body>
</html>

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tanda tangan</title>
    <link rel="stylesheet" href="libs/css/bootstrap.3.3.6.min.css">
    <style>

    </style>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/signature_pad@4.1.7/dist/signature_pad.umd.min.js"></script>
</head>
<body>
    <h1>Tanda tangan</h1>
    <form method="post" action="process.php" enctype="multipart/form-data">
        <div id="signature-pad">
            <div style="border:solid 2px palevioletred; width:360px; height:110px; padding:3px;">  
                <canvas id="canvas" width="350px" height="100px"></canvas>
            </div>
            <div style="margin-top:10px;">
                <button type="button" id="clear-btn" class="btn btn-info" data-action="clear"><span class="glyphicon glyphicon-remove"></span>Clear</button>
                <button type="submit" id="save-btn" lass="btn btn-primary" data-action="save-png"><span class="glyphicon glyphicon-ok"></span>Save</button>
            </div>
        </div>
    </form>
<script type="text/javascript">
var wrapper = document.getElementbyId("signature_pad.umd.min.js");
var cleatButton = wrapper.querySelector("[data-action=clear]");
var savePNGButton = wrapper.querySelector("[data-action=save-png]");
var canvas = wrapper.querySelector("canvas");
var el_note = document.getElementbyId("note");
var signaturePad;
signaturePad = new signaturePad(canvas);

</script>
</body>
</html> --}}