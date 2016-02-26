<?php
$section = 'GridBasic';
?>
<?php include 'includes/head.inc.php'; ?>
    <script>
      $(document).ready(function() {
        $("#grid").kendoGrid({
          dataSource: {
              pageSize: 5
          },
          scrollable: true,
          sortable: true,
          pageable: {
              refresh: true,
              buttonCount: 5
          }
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
              <h3>Grid / Basic usage</h3>
              <!-- Kendo MultiSelect -->
              <div class="example">
                <div class="row">
                  <div class="col-md-12">

                    <table id="grid">
                      <colgroup>
                          <col style="width:75px" />
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
                          <col style="width:60px" />
                      </colgroup>
                      <thead>
                        <tr>
                          <th data-field="code">Code</th>
                          <th data-field="description">Description</th>
                          <th data-field="qty">Qty</th>
                          <th data-field="subloc">Sub-location</th>
                          <th data-field="component">Component</th>
                          <th data-field="trade">Trade</th>
                          <th data-field="code2">Code</th>
                          <th data-field="description2">Description</th>
                          <th data-field="qty2">Qty</th>
                          <th data-field="subloc2">Sub-location</th>
                          <th data-field="component2">Component</th>
                          <th data-field="trade2">Trade</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>101101</td>
                          <td>WALL:DEMOLISH EXTERNAL 1/2B WALL</td>
                          <td>1</td>
                          <td>COM</td>
                          <td></td>
                          <td>BR</td>
                          <td>101101</td>
                          <td>WALL:DEMOLISH EXTERNAL 1/2B WALL</td>
                          <td>1</td>
                          <td>COM</td>
                          <td></td>
                          <td>BR</td>
                        </tr>
                        <tr>
                          <td>101301</td>
                          <td>WALL:BUILD 1/2B WALL IN COMMONS</td>
                          <td>2</td>
                          <td>COM</td>
                          <td></td>
                          <td>BR</td>
                          <td>101301</td>
                          <td>WALL:BUILD 1/2B WALL IN COMMONS</td>
                          <td>2</td>
                          <td>COM</td>
                          <td></td>
                          <td>BR</td>
                        </tr>
                        <tr>
                          <td>101133</td>
                          <td>WALL:DEMOLISH EXTERNAL 1/2B WALL</td>
                          <td>3</td>
                          <td>COM</td>
                          <td></td>
                          <td>BR</td>
                          <td>101301</td>
                          <td>WALL:BUILD 1/2B WALL IN COMMONS</td>
                          <td>2</td>
                          <td>COM</td>
                          <td></td>
                          <td>BR</td>
                        </tr>
                        <tr>
                          <td>101301</td>
                          <td>WALL:BUILD 1/2B WALL IN COMMONS</td>
                          <td>4</td>
                          <td>COM</td>
                          <td></td>
                          <td>BR</td>
                          <td>101301</td>
                          <td>WALL:BUILD 1/2B WALL IN COMMONS</td>
                          <td>2</td>
                          <td>COM</td>
                          <td></td>
                          <td>BR</td>
                        </tr>
                        <tr>
                          <td>101101</td>
                          <td>WALL:DEMOLISH EXTERNAL 1/2B WALL</td>
                          <td>5</td>
                          <td>COM</td>
                          <td></td>
                          <td>BR</td>
                          <td>101301</td>
                          <td>WALL:BUILD 1/2B WALL IN COMMONS</td>
                          <td>2</td>
                          <td>COM</td>
                          <td></td>
                          <td>BR</td>
                        </tr>
                        <tr>
                          <td>101301</td>
                          <td>WALL:BUILD 1/2B WALL IN COMMONS</td>
                          <td>6</td>
                          <td>COM</td>
                          <td></td>
                          <td>BR</td>
                          <td>101301</td>
                          <td>WALL:BUILD 1/2B WALL IN COMMONS</td>
                          <td>2</td>
                          <td>COM</td>
                          <td></td>
                          <td>BR</td>
                        </tr>
                        <tr>
                          <td>101101</td>
                          <td>WALL:DEMOLISH EXTERNAL 1/2B WALL</td>
                          <td>7</td>
                          <td>COM</td>
                          <td></td>
                          <td>BR</td>
                          <td>101301</td>
                          <td>WALL:BUILD 1/2B WALL IN COMMONS</td>
                          <td>2</td>
                          <td>COM</td>
                          <td></td>
                          <td>BR</td>
                        </tr>
                        <tr>
                          <td>101301</td>
                          <td>WALL:BUILD 1/2B WALL IN COMMONS</td>
                          <td>8</td>
                          <td>COM</td>
                          <td></td>
                          <td>BR</td>
                          <td>101301</td>
                          <td>WALL:BUILD 1/2B WALL IN COMMONS</td>
                          <td>2</td>
                          <td>COM</td>
                          <td></td>
                          <td>BR</td>
                        </tr>
                        <tr>
                          <td>101101</td>
                          <td>WALL:DEMOLISH EXTERNAL 1/2B WALL</td>
                          <td>9</td>
                          <td>COM</td>
                          <td></td>
                          <td>BR</td>
                          <td>101301</td>
                          <td>WALL:BUILD 1/2B WALL IN COMMONS</td>
                          <td>2</td>
                          <td>COM</td>
                          <td></td>
                          <td>BR</td>
                        </tr>
                        <tr>
                          <td>101301</td>
                          <td>WALL:BUILD 1/2B WALL IN COMMONS</td>
                          <td>10</td>
                          <td>COM</td>
                          <td></td>
                          <td>BR</td>
                          <td>101301</td>
                          <td>WALL:BUILD 1/2B WALL IN COMMONS</td>
                          <td>2</td>
                          <td>COM</td>
                          <td></td>
                          <td>BR</td>
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
        pageSize: 5
    },
    scrollable: true,
    sortable: true,
    pageable: {
        refresh: true,
        buttonCount: 5
    }
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