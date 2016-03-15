<?php
$section = 'assess-pane';
?>
<?php include 'includes/head.inc.php'; ?>
<script>
  $(document).ready(function() {
    
    $("#grid-active").kendoGrid({
      dataSource: {
          pageSize: 50
      },
      scrollable: false,
      sortable: true,
    });
    $("#grid-active").kendoTooltip({
      filter: "td:nth-child(1)", //this filter selects the first column cells
      position: "left",
      content: kendo.template($("#template-active").html()),
    }).data("kendoTooltip");
    $("#grid-complete").kendoGrid({
      dataSource: {
          pageSize: 5
      },
      scrollable: false,
      sortable: true,
      pageable: {
          buttonCount: 3
      }
    });
    $("#grid-complete").kendoTooltip({
      filter: "td:nth-child(1)", //this filter selects the first column cells
      position: "left",
      content: kendo.template($("#template-complete").html()),
    }).data("kendoTooltip");
  });
</script>
<script id="template-active" type="text/x-kendo-template">
 <table class="table">
  <thead>
    <tr>
     <th>Description</th>
     <th>Status</th>
     <th>Stage</th>
     <th>Target date</th>
     <th>Contractor</th>
    </tr> 
  </thead>
  <tbody>
    <tr>
     <td>Short Description (Summary) of the job. 60 Characters. Ta Da</td>
     <td>06</td>
     <td>06</td>
     <td>dd/mm/yyyy</td>
     <td>ASPIN</td>
    </tr> 
  </tbody>  
 </table>
</script>
<script id="template-complete" type="text/x-kendo-template">
 <table class="table">
  <thead>
    <tr>
     <th>Description</th>
     <th>Status</th>
     <th>Completed date</th>
     <th>Contractor</th>
    </tr> 
  </thead>
  <tbody>
    <tr>
     <td>Short Description (Summary) of the job. 60 Characters. Ta Da</td>
     <td>06</td>
     <td>dd/mm/yyyy</td>
     <td>ASPIN</td>
    </tr> 
  </tbody>  
 </table>
</script>

    <!-- Kendo UI combined JavaScript -->
    
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
            <div class="col-md-12">
              <h1>Log Job</h1>
              <h3>Assess Pane</h3>
              <!-- Kendo MultiSelect -->
              <div class="example">
                <div class="row">
                  <div class="col-sm-6 col-sm-offset-6 col-md-4 col-md-offset-8">
                
                    <div class="assess-pane row">
                      <div class="pane-section col-md-12">
                        <h4>Warnings &amp; Advisories</h4>
                        <span class="fa fa-warning"></span><span class="fa fa-bell-o"></span>
                      </div>
                      <div class="pane-section col-md-12">
                        <h4>Location reference</h4>
                        <p>PENNIN014</p>
                      </div>
                      <div class="pane-section col-md-12">
                        <h4>Location address</h4>
                        <address>
                          14 Pennine Way<br>
                          Longbenton<br>
                          Newcastle upon Tyne<br>
                          NE12 8TA
                        </address>
                      </div>
                      <div class="pane-section col-md-6">
                        <h4>Status</h4>
                        <p>Occupied</p>
                      </div>
                      <div class="pane-section col-md-6">
                        <h4>Sub-status</h4>
                        <p>General rented</p>
                      </div>
                      <div class="pane-section col-md-12">
                        <h4>Residents</h4>
                        <ul class="residents-ul">
                          <li>Mrs A Bode</li>
                          <li>Mr B Ungalow</li>
                          <li>Miss A Partment</li>
                        </ul>
                      </div>
                      <div class="pane-section col-md-12">
                        <h4>Arrears balance</h4>
                        <p class="in-arrears">£143.57</p>
                      </div>
                      <div class="pane-section col-md-12">
                        <h4>Active repairs</h4>
                        <table id="grid-active">
                          <colgroup>
                              <col style="" />
                              <col style="width:55px" />
                              <col style="width:55px" />
                              <col style="width:30px" />
                          </colgroup>
                          <thead>
                            <tr>
                              <th data-field="desc">Description</th>
                              <th data-field="status">Status</th>
                              <th data-field="dob">Stage</th>
                              <th data-field="view"><span class="sr-only">View job</span></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Carry out damp proofing works</td>
                              <td>06</td>
                              <td>06</td>
                              <td><span class="fa fa-eye"></span></td>
                            </tr>
                            <tr>
                              <td>Carry out damp proofing works</td>
                              <td>06</td>
                              <td>06</td>
                              <td><span class="fa fa-eye"></span></td>
                            </tr>
                            <tr>
                              <td>Carry out damp proofing works</td>
                              <td>06</td>
                              <td>06</td>
                              <td><span class="fa fa-eye"></span></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="pane-section col-md-12">
                        <h4>Complete repairs</h4>
                        <table id="grid-complete">
                          <colgroup>
                              <col style="" />
                              <col style="width:55px" />
                              <col style="width:30px" />
                          </colgroup>
                          <thead>
                            <tr>                              
                              <th data-field="description">Description</th>
                              <th data-field="status">Status</th>
                              <th data-field="view"><span class="sr-only">View job</span></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Carry out damp proofing works</td>
                              <td>06</td>
                              <td><span class="fa fa-eye"></span></td>
                            </tr>
                            <tr>
                              <td>Carry out damp proofing works</td>
                              <td>06</td>
                              <td><span class="fa fa-eye"></span></td>
                            </tr>
                            <tr>
                              <td>Carry out damp proofing works</td>
                              <td>06</td>
                              <td><span class="fa fa-eye"></span></td>
                            </tr>
                            <tr>
                              <td>Carry out damp proofing works</td>
                              <td>06</td>
                              <td><span class="fa fa-eye"></span></td>
                            </tr>
                            <tr>
                              <td>Carry out damp proofing works</td>
                              <td>06</td>
                              <td><span class="fa fa-eye"></span></td>
                            </tr>
                            <tr>
                              <td>Carry out damp proofing works</td>
                              <td>06</td>
                              <td><span class="fa fa-eye"></span></td>
                            </tr>
                            <tr>
                              <td>Carry out damp proofing works</td>
                              <td>06</td>
                              <td><span class="fa fa-eye"></span></td>
                            </tr>
                            <tr>
                              <td>Carry out damp proofing works</td>
                              <td>06</td>
                              <td><span class="fa fa-eye"></span></td>
                            </tr>
                            <tr>
                              <td>Carry out damp proofing works</td>
                              <td>06</td>
                              <td><span class="fa fa-eye"></span></td>
                            </tr>
                            <tr>
                              <td>Carry out damp proofing works</td>
                              <td>06</td>
                              <td><span class="fa fa-eye"></span></td>
                            </tr>
                            <tr>
                              <td>Carry out damp proofing works</td>
                              <td>06</td>
                              <td><span class="fa fa-eye"></span></td>
                            </tr>
                            <tr>
                              <td>Carry out damp proofing works</td>
                              <td>06</td>
                              <td><span class="fa fa-eye"></span></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>                      

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <pre>
                <code class="language-html" data-lang="html">
&lt;!-- Button trigger modal --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot; data-toggle=&quot;modal&quot; data-target=&quot;#myModal&quot;&gt;
  Launch warning modal
&lt;/button&gt;

&lt;!-- Modal --&gt;
&lt;div class=&quot;modal modal-warning fade&quot; id=&quot;myModal&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;myModalLabel&quot;&gt;
  &lt;div class=&quot;modal-dialog&quot; role=&quot;document&quot;&gt;
    &lt;div class=&quot;modal-content&quot;&gt;
      &lt;div class=&quot;modal-header&quot;&gt;
        &lt;h1 class=&quot;modal-title&quot; id=&quot;myModalLabel&quot;&gt;Asbestos&lt;/h1&gt;
      &lt;/div&gt;
      &lt;div class=&quot;modal-body&quot;&gt;
        &lt;span class=&quot;fa fa-warning&quot;&gt;&lt;/span&gt;
        &lt;p&gt;&lt;strong&gt;Risk: &lt;span&gt;High&lt;/span&gt;&lt;/strong&gt;&lt;/p&gt;
        &lt;p&gt;Asbestos records exist for this location&lt;/p&gt;
        &lt;p&gt;Please check the asbestos register&lt;/p&gt;
      &lt;/div&gt;
      &lt;div class=&quot;modal-footer&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-default&quot; data-dismiss=&quot;modal&quot;&gt;Acknowledge&lt;/button&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-default&quot;&gt;Display&lt;/button&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;  
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
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
    </div>
    <div class="col-md-6">
    </div>
  </div>
</div>