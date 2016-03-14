<?php
$section = 'grid';
?>
<?php include 'includes/head.inc.php'; ?>

    <!-- Kendo UI combined JavaScript -->
    <script src="javascripts/kendo.all.min.js"></script>
    <script>
        $(document).ready(function() {
            
        });
    </script>
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
              <h1>Grid system</h1>
              <h3>Bootstrap 12 column grid</h3>
              <!-- Kendo MultiSelect -->
              <div class="example">
                <div class="row">
                  <h4>12 column (full width)</h4>
                  <div class="col-md-12 demo-grid">
                    <div class="grid-content">col-md-12</div>
                  </div>
                </div> 
                <div class="row">
                  <h4>2 x 6 columns</h4>
                  <div class="col-md-6 demo-grid">
                    <div class="grid-content">col-md-6</div>
                  </div>
                  <div class="col-md-6 demo-grid">
                    <div class="grid-content">col-md-6</div>
                  </div>
                </div>
                <div class="row">
                  <h4>8 columns and 4 columns</h4>
                  <div class="col-md-8 demo-grid">
                    <div class="grid-content">col-md-8</div>
                  </div>
                  <div class="col-md-4 demo-grid">
                    <div class="grid-content">col-md-4</div>
                  </div>
                </div> 
                <div class="row">
                  <h4>3 x 4 columns</h4>
                  <div class="col-md-4 demo-grid">
                    <div class="grid-content">col-md-4</div>
                  </div>
                  <div class="col-md-4 demo-grid">
                    <div class="grid-content">col-md-4</div>
                  </div>
                  <div class="col-md-4 demo-grid">
                    <div class="grid-content">col-md-4</div>
                  </div>
                </div> 
                <div class="row">
                  <h4>4 x 3 columns</h4>
                  <div class="col-md-3 demo-grid">
                    <div class="grid-content">col-md-3</div>
                  </div>
                  <div class="col-md-3 demo-grid">
                    <div class="grid-content">col-md-3</div>
                  </div>
                  <div class="col-md-3 demo-grid">
                    <div class="grid-content">col-md-3</div>
                  </div>
                  <div class="col-md-3 demo-grid">
                    <div class="grid-content">col-md-3</div>
                  </div>
                </div>
                <div class="row">
                  <h4>6 x 2 columns</h4>
                  <div class="col-md-2 demo-grid">
                    <div class="grid-content">col-md-2</div>
                  </div>
                  <div class="col-md-2 demo-grid">
                    <div class="grid-content">col-md-2</div>
                  </div>
                  <div class="col-md-2 demo-grid">
                    <div class="grid-content">col-md-2</div>
                  </div>
                  <div class="col-md-2 demo-grid">
                    <div class="grid-content">col-md-2</div>
                  </div>
                  <div class="col-md-2 demo-grid">
                    <div class="grid-content">col-md-2</div>
                  </div>
                  <div class="col-md-2 demo-grid">
                    <div class="grid-content">col-md-2</div>
                  </div>
                </div>                  
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <pre>
                <code class="language-html" data-lang="html">
&lt;div class=&quot;container-fluid&quot;&gt;
  &lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;col-md-6&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-md-6&quot;&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
                </code>
              </pre>
            </div>
            <!-- end of code -->
            <div class="col-md-6">
              <div class="notes">
                Our grid system uses the standard Bootstrap (v3) grid system composed of 12 flexible columns with a gutter between columns of 30px. 
                <br />
                For a detailed explaination of how to use it please reference the <a href="http://getbootstrap.com/css/#grid" target="_blank">Bootstrap documentation</a>.
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