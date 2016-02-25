<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Pattern library | Horizon</title>    

    <!-- Common Kendo UI CSS for web and dataviz widgets -->
    <link href="stylesheets/kendo/kendo.common-bootstrap.min.css" rel="stylesheet" />

    <!-- Default Kendo UI theme CSS for web and dataviz widgets -->
    <link href="stylesheets/kendo/kendo.bootstrap.min.css" rel="stylesheet" />

    <!-- (optional) Kendo UI Mobile CSS, include only if you will use the mobile devices features -->
    <link href="stylesheets/kendo/kendo.bootstrap.mobile.min.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap -->
    <link href="stylesheets/bootstrap_horizon.css" rel="stylesheet">    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="javascripts/bootstrap.min.js"></script>

    <!-- Kendo UI combined JavaScript -->
    <script src="javascripts/kendo.all.min.js"></script>
    <script>
        $(document).ready(function() {
            // create MultiSelect from select HTML element
            var trade = $("#trade").kendoMultiSelect({
                // autoClose: false
            }).data("kendoMultiSelect");

            $("#get").click(function() {
                alert("Attendees:\n\nTrade(s): " + trade.value());
            });
        });
    </script>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <!-- LEFT NAV -->
        <?php include 'includes/left_nav.inc.php'; ?>

        <!-- MAIN CONTENT -->
        <div class="col-md-10">
          <div class="row">
            <div class="col-md-8">
              <!-- Kendo MultiSelect -->
              <div id="example" role="application">
                <div class="demo-section k-content">
                    <h2>Invite Attendees</h2>
                    <label for="trade">Trade</label>
                    <select id="trade" multiple="multiple" data-placeholder="Select trade(s)...">
                        <option>Steven White</option>
                        <option>Nancy King</option>
                        <option>Nancy Davolio</option>
                        <option>Robert Davolio</option>
                        <option>Michael Leverling</option>
                        <option>Andrew Callahan</option>
                        <option>Michael Suyama</option>
                        <option>Anne King</option>
                        <option>Laura Peacock</option>
                        <option>Robert Fuller</option>
                        <option>Janet White</option>
                        <option>Nancy Leverling</option>
                        <option>Robert Buchanan</option>
                        <option>Margaret Buchanan</option>
                        <option>Andrew Fuller</option>
                        <option>Anne Davolio</option>
                        <option>Andrew Suyama</option>
                        <option>Nige Buchanan</option>
                        <option>Laura Fuller</option>
                    </select>
                    <button class="k-button btn-primary btn" id="get">Search</button>
                </div>
              </div>
            </div>
          </div>

          

        </div>
      </div>
    </div>
    

    
  </body>
</html>