<?php
$section = 'Datetime';
?>
<?php include 'includes/head.inc.php'; ?>
    <script>
        $(document).ready(function() {
            // create DateTimePicker from input HTML element
            $("#datetimepicker").kendoDateTimePicker({
              format: "dd/MM/yyyy - HH:mm",
              value:new Date()
            });
        });
    </script>
  </head>
  <body>
    <?php include 'includes/top_nav.inc.php'; ?>
    
        <?php include 'includes/left_nav.inc.php'; ?>

        <!-- MAIN CONTENT -->
        <div class="col-md-9">
          <div class="row">
            <div class="col-md-12">
              <h1>Form Elements</h1>
              <h3>DateTimePicker / Basic usage</h3>
              <!-- Kendo MultiSelect -->
              <div class="example" role="application">
                <div class="row">
                  <div class="col-md-4">
                    <div class="k-content">
                        <label>Date / Time</label>
                        <input id="datetimepicker" style="width: 100%;" />
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <img src="images/components_pickers_date.png" style="width:500px">
                    <br>
                    <small>Style it to look like this I reckon.</small>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <pre>
                <code class="language-html" data-lang="html">
&lt;div class=&quot;k-content&quot;&gt;
    &lt;label&gt;Date / Time&lt;/label&gt;
    &lt;input id=&quot;datetimepicker&quot; style=&quot;width: 100%;&quot; /&gt;
&lt;/div&gt;
                </code>
                <code class="language-js" datalang="javascript">
$("#datetimepicker").kendoDateTimePicker({
  format: "dd/MM/yyyy - HH:mm",
  value:new Date()
});
                </code>
              </pre>
            </div>
            <!-- end of code -->
            <div class="col-md-6">
              <div class="notes"></div>
            </div>
          </div>
          <!-- end of Row -->
        </div>
        <!-- end of col-md-9 -->

        
<?php include 'includes/footer.inc.php'; ?>