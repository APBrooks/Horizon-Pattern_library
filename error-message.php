<?php
$section = 'error-message';
?>
<?php include 'includes/head.inc.php'; ?>

    <!-- Kendo UI combined JavaScript -->
    <script>
        $(document).ready(function() {
            // Launch popovers
            function launchPopovers() {
              var popoverTemplate = ['<div class="popover">',
                                        '<div class="arrow"></div>',
                                        '<div class="popover-content">',                                    
                                        '</div>',
                                    '</div>'].join('');

                $('body').popover({
                    selector: '.has-popover',
                    trigger: 'click',
                    template: popoverTemplate,
                    placement: "bottom",
                    html: true
                });
            }
            launchPopovers();
        });
    </script>
    <style type="text/css">
      .popover {
        width: 100%;
        max-width: none;
      }
    </style>
  </head>
  <body>
    <?php include 'includes/top_nav.inc.php'; ?>
    <div class="container-fluid">

      <div class="row">
        <!-- LEFT NAV -->
        <?php include 'includes/left_nav.inc.php'; ?>

        <!-- MAIN CONTENT -->
        <div class="col-md-9">
          <div class="row">
            <div class="col-md-6">
              <h1>Error messaging</h1>
              <h3>Basic usage</h3>
              <!-- Kendo MultiSelect -->
              <div class="example">
               <div class="row">
                  <div class="col-xs-12">
                    <a  class="btn btn-link summary-popover has-popover" 
                      data-toggle="popover"
                      data-content='
                        <div>
                          <strong>Contractor unable to complete all SORs on this priority</strong> 
                          <br>ASPIN is unable to complete SOR code: 101101 at a priority of 1.
                          <br>If you are unable to resolve this error contact your System Administrator.
                        </div>
                      '>
                        Click to toggle popover
                    </a>
                  </div>
               </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <pre>
                <code class="language-html" data-lang="html">

                </code>
              </pre>
            </div>
            <!-- end of code -->
            <div class="col-md-6">
              <div class="notes">
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    
  </body>
</html>