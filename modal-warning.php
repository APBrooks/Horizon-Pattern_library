<?php
$section = 'ModalWarning';
?>
<?php include 'includes/head.inc.php'; ?>

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
            <div class="col-md-6">
              <h1>Modals</h1>
              <h3>Warning modal</h3>
              <!-- Kendo MultiSelect -->
              <div class="example">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
                  Launch warning modal
                </button>

                <!-- Modal -->
                <div class="modal modal-warning fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title" id="myModalLabel">Asbestos</h1>
                      </div>
                      <div class="modal-body">
                        <span class="fa fa-warning"></span>
                        <p><strong>Risk: <span>High</span></strong></p>
                        <p>Asbestos records exist for this location</p>
                        <p>Please check the asbestos register</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Acknowledge</button>
                        <button type="button" class="btn btn-default">Display</button>
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