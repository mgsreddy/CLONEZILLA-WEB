<!doctype html>
 
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>jQuery UI Tooltip - Forms</title>
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/humanity/jquery-ui-1.9.1.custom.css" />
        <script>
    $(function() {
        var tooltips = $( "[title]" ).tooltip();
        $( "<button>" )
            .text( "Show help" )
            .button()
            .click(function() {
                tooltips.tooltip( "open" );
            })
            
    });
    </script>
</head>
<body>
 
<form>
    <fieldset>
        <div>
            <label for="firstname">Firstname</label>
            <input id="firstname" name="firstname" title="Please provide your firstname." />
        </div>
        <div>
            <label for="lastname">Lastname</label>
            <input id="lastname" name="lastname" title="Please provide also your lastname." />
        </div>
        <div>
            <label for="address">Address</label>
            <input id="address" name="address" title="Your home or work address." />
        </div>
    </fieldset>
</form>
 
 
</body>
</html>