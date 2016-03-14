<?php
$section = 'Upload';
?>
<?php include 'includes/head.inc.php'; ?>
    <script>
        $(document).ready(function() {
            $("#files").kendoUpload();
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
              <h3>Upload / Basic usage</h3>
              <!-- Kendo MultiSelect -->
              <div class="example" role="application">
                <div class="row">
                  <div class="col-md-4">
                    <form method="post" action="/kendo-ui/upload/submit">
                        <div class="demo-section k-content">
                            <input name="files" id="files" type="file" />
                            <p style="padding-top: 1em; text-align: right">
                                <input type="submit" value="Submit" class="k-button k-primary" />
                            </p>
                        </div>
                    </form>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <pre>
                <code class="language-html" data-lang="html">
&lt;form method=&quot;post&quot; action=&quot;/kendo-ui/upload/submit&quot;&gt;
    &lt;div class=&quot;demo-section k-content&quot;&gt;
        &lt;input name=&quot;files&quot; id=&quot;files&quot; type=&quot;file&quot; /&gt;
        &lt;p style=&quot;padding-top: 1em; text-align: right&quot;&gt;
            &lt;input type=&quot;submit&quot; value=&quot;Submit&quot; class=&quot;k-button k-primary&quot; /&gt;
        &lt;/p&gt;
    &lt;/div&gt;
&lt;/form&gt;
                </code>
                <code class="language-js" datalang="javascript">
$(document).ready(function() {
    $("#files").kendoUpload();
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