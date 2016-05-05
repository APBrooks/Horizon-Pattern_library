<?php
$section = 'accordion';
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
              <h1>Accordion</h1>
              <h3>Bootstrap accordion - Wizard concept, one pane at a time</h3>
              <!-- Kendo MultiSelect -->
              <div class="example">
                <div class="panel-group accordion-panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          <span class="icon-container icon-container-primary">
                            <span class="fa fa-check"></span>
                          </span>Diagnose
                        </a>
                      </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 
                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. 
                        Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. 
                        Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. 
                        Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't 
                        heard of them accusamus labore sustainable VHS.
                        <div>
                          <a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Continue
                          </a>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          <span class="icon-container icon-container-default">
                            <span>2</span>
                          </span>Finance
                        </a>
                      </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                      <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        <div>
                          <a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Continue
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          <span class="icon-container icon-container-default">
                            <span>3</span>
                          </span>Ticket
                        </a>
                      </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                      <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
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
&lt;div class=&quot;panel-group accordion-panel-group&quot; id=&quot;accordion1&quot; role=&quot;tablist&quot; aria-multiselectable=&quot;true&quot;&gt;
  &lt;div class=&quot;panel panel-default&quot;&gt;
    &lt;div class=&quot;panel-heading&quot; role=&quot;tab&quot; id=&quot;headingOne&quot;&gt;
      &lt;h4 class=&quot;panel-title&quot;&gt;
        &lt;a role=&quot;button&quot; data-toggle=&quot;collapse&quot; data-parent=&quot;#accordion1&quot; href=&quot;#collapseOne&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;collapseOne&quot;&gt;
          &lt;span class=&quot;icon-container icon-container-primary&quot;&gt;
            &lt;span class=&quot;fa fa-check&quot;&gt;&lt;/span&gt;
          &lt;/span&gt;Diagnose
        &lt;/a&gt;
      &lt;/h4&gt;
    &lt;/div&gt;
    &lt;div id=&quot;collapseOne&quot; class=&quot;panel-collapse collapse in&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;headingOne&quot;&gt;
      &lt;div class=&quot;panel-body&quot;&gt;
        BODY CONTENT
        &lt;div&gt;
          &lt;a class=&quot;btn btn-primary&quot; role=&quot;button&quot; data-toggle=&quot;collapse&quot; href=&quot;#collapseTwo&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseTwo&quot;&gt;
            Continue
          &lt;/a&gt;
        &lt;/div&gt;        
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;

// Restrict Accordion to one panel
$('#accordion1').on('show.bs.collapse', function () {
  $('#accordion1 .in').collapse('hide');
});  
                </code>
              </pre>
            </div>
            <!-- end of code -->
            <div class="col-md-6">
              <div class="notes">
                Wizard concept for accordion.<br><br>
                To be used when a workflow process is required (ie, log a job) forcing the user to focus on one pane at a time.<br>
                Refer to the individual process's Narrative documentation for detailed usage notes.<br><br>
                The panes will be numbered, currently active pane will be highlighted in the primary color as shown.
                Once a pane has been completed, and another pane is open the 'number' will change to the 'check' icon to indicate completion of the pane.
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <h1>Accordion</h1>
              <h3>Bootstrap accordion - Free roam concept, multiple open panes allowed</h3>
              <!-- Kendo MultiSelect -->
              <div class="example">
                <div class="panel-group accordion-panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOneA">
                      <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseOneA" aria-expanded="true" aria-controls="collapseOneA">
                          <span class="icon-container icon-container-primary">
                            <span class="fa fa-pencil"></span>
                          </span>Diagnose
                        </a>
                      </h4>
                    </div>
                    <div id="collapseOneA" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOneA">
                      <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 
                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. 
                        Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. 
                        Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. 
                        Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't 
                        heard of them accusamus labore sustainable VHS.
                        <div>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwoA">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwoA" aria-expanded="false" aria-controls="collapseTwoA">
                          <span class="icon-container icon-container-default">
                            <span class="fa fa-check"></span>
                          </span>Finance
                        </a>
                      </h4>
                    </div>
                    <div id="collapseTwoA" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwoA">
                      <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        <div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThreeA">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseThreeA" aria-expanded="false" aria-controls="collapseThreeA">
                          <span class="icon-container icon-container-default">
                            <span class="fa fa-pencil"></span>
                          </span>Ticket
                        </a>
                      </h4>
                    </div>
                    <div id="collapseThreeA" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThreeA">
                      <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
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
&lt;div class=&quot;panel-group accordion-panel-group&quot; id=&quot;accordion1&quot; role=&quot;tablist&quot; aria-multiselectable=&quot;true&quot;&gt;
  &lt;div class=&quot;panel panel-default&quot;&gt;
    &lt;div class=&quot;panel-heading&quot; role=&quot;tab&quot; id=&quot;headingOneA&quot;&gt;
      &lt;h4 class=&quot;panel-title&quot;&gt;
        &lt;a role=&quot;button&quot; data-toggle=&quot;collapse&quot; data-parent=&quot;#accordion1&quot; href=&quot;#collapseOne&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;collapseOne&quot;&gt;
          &lt;span class=&quot;icon-container icon-container-primary&quot;&gt;
            &lt;span class=&quot;fa fa-pencil&quot;&gt;&lt;/span&gt;
          &lt;/span&gt;Diagnose
        &lt;/a&gt;
      &lt;/h4&gt;
    &lt;/div&gt;
    &lt;div id=&quot;collapseOne&quot; class=&quot;panel-collapse collapse in&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;headingOneA&quot;&gt;
      &lt;div class=&quot;panel-body&quot;&gt;
        BODY CONTENT        
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
                Free roam concept for accordion.<br><br>
                To be used when there is no workflow process required (ie, view/edit job) and the user can jump around the panes, having more than one open if required.<br>
                Refer to the individual process's Narrative documentation for detailed usage notes.<br><br>
                The panes will all have the 'edit' icon, any open pane will be highlighted in the primary color as shown.
                If a pane's content has been altered, 'edit' icon will change to the 'check' icon to indicate content change made.
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