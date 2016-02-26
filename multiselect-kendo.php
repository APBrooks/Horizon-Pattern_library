<?php include 'includes/head.inc.php'; ?>
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
    <?php include 'includes/top_nav.inc.php'; ?>
    
        <?php include 'includes/left_nav.inc.php'; ?>

        <!-- MAIN CONTENT -->
        <div class="col-md-9">
          <div class="row">
            <div class="col-md-12">
              <h1>Form Elements</h1>
              <h3>MultiSelect / Basic usage</h3>
              <!-- Kendo MultiSelect -->
              <div class="example" role="application">
                <div class="row">
                  <div class="col-md-4">
                    <div class="demo-section k-content">                    
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
          <div class="row">
            <div class="col-md-6">
              <pre>
                <code class="language-html" data-lang="html">
&lt;div id=&quot;example&quot; role=&quot;application&quot;&gt;
  &lt;div class=&quot;demo-section k-content&quot;&gt;
      &lt;h2&gt;Invite Attendees&lt;/h2&gt;
      &lt;label for=&quot;trade&quot;&gt;Trade&lt;/label&gt;
      &lt;select id=&quot;trade&quot; multiple=&quot;multiple&quot; data-placeholder=&quot;Select trade(s)...&quot;&gt;
          &lt;option&gt;Option one&lt;/option&gt;
          &lt;option&gt;Option two&lt;/option&gt;
          &lt;option&gt;Option three&lt;/option&gt;
      &lt;/select&gt;
      &lt;button class=&quot;k-button btn-primary btn&quot; id=&quot;get&quot;&gt;Search&lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;
                </code>
                <code class="language-js" datalang="javascript">
$(document).ready(function() {
    // create MultiSelect from select HTML element
    var trade = $("#trade").kendoMultiSelect({
        // autoClose: false
    }).data("kendoMultiSelect");
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