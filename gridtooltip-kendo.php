<?php
$section = 'GridTooltip';
?>
<?php include 'includes/head.inc.php'; ?>
    <script>
      $(document).ready(function() {
        
        $("#grid").kendoGrid({
          dataSource: {
              pageSize: 50
          },
          scrollable: false,
          sortable: true,
        });
        $("#grid").kendoTooltip({
          filter: "td:nth-child(1)", //this filter selects the first column cells
          position: "left",
          content: kendo.template($("#template").html()),
        }).data("kendoTooltip");
      });
    </script>
    <script id="template" type="text/x-kendo-template">
   <table class="table">
    <thead>
      <tr>
       <th>Code</th>
       <th>Description</th>
       <th>Status</th>
       <th>Stage</th>
       <th>Date</th>
      </tr> 
    </thead>
    <tbody>
      <tr>
       <td>101101</td>
       <td>Short Description (Summary) of the job. 60 Characters. Ta Da</td>
       <td>06</td>
       <td>06</td>
       <td>dd/mm/yyyy</td>
      </tr> 
    </tbody>  
   </table>
  </script>
  </head>
  <body>
    <?php include 'includes/top_nav.inc.php'; ?>
    
        <?php include 'includes/left_nav.inc.php'; ?>

        <!-- MAIN CONTENT -->
        <div class="col-md-9">
          

          <div class="row">
            <div class="col-md-12">
              <h1>Tables (Kendo grids)</h1>
              <h3>Grid / with Tooltip</h3>
              <!-- Kendo MultiSelect -->
              <div class="example">
                <div class="row">
                  <div class="col-md-6 col-md-offset-6">

                    <table id="grid">
                      <colgroup>
                          <!-- <col style="width:75px" />
                          <col style="width:350px" />
                          <col style="width:40px" />
                          <col style="width:100px" />
                          <col style="width:90px" />
                          <col style="width:60px" />
                          <col style="width:75px" />
                          <col style="width:350px" />
                          <col style="width:40px" />
                          <col style="width:100px" />
                          <col style="width:90px" />
                          <col style="width:60px" /> -->
                      </colgroup>
                      <thead>
                        <tr>
                          <th data-field="ref">Reference</th>
                          <th data-field="name">Name</th>
                          <th data-field="dob" style="text-right">Date of birth</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>101101</td>
                          <td>Mr David Tennant</td>
                          <td style="text-right">15/12/1976</td>
                        </tr>
                        <tr>
                          <td>101101</td>
                          <td>Mr David Tennant</td>
                          <td style="text-right">15/12/1976</td>
                        </tr>
                        <tr>
                          <td>101101</td>
                          <td>Mr David Tennant</td>
                          <td style="text-right">15/12/1976</td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
                
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <pre>
                <code class="language-html" data-lang="html">
&lt;div id=&quot;grid&quot;&gt;&lt;/div&gt;
                </code>
                <code class="language-js" datalang="javascript">
$(document).ready(function() {
  $("#grid").kendoGrid({
    dataSource: {
        pageSize: 50
    },
    scrollable: false,
    sortable: true,
  });
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