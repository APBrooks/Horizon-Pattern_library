<?php
$section = 'GridEdit';
?>
<?php include 'includes/head.inc.php'; ?>
<script src="javascripts/products.js"></script>
              <script>
                $(document).ready(function () {
                    var crudServiceBaseUrl = "//demos.telerik.com/kendo-ui/service",
                        dataSource = new kendo.data.DataSource({
                            transport: {
                                read:  {
                                    url: crudServiceBaseUrl + "/Products",
                                    dataType: "jsonp"
                                },
                                update: {
                                    url: crudServiceBaseUrl + "/Products/Update",
                                    dataType: "jsonp"
                                },
                                destroy: {
                                    url: crudServiceBaseUrl + "/Products/Destroy",
                                    dataType: "jsonp"
                                },
                                create: {
                                    url: crudServiceBaseUrl + "/Products/Create",
                                    dataType: "jsonp"
                                },
                                parameterMap: function(options, operation) {
                                    if (operation !== "read" && options.models) {
                                        return {models: kendo.stringify(options.models)};
                                    }
                                }
                            },
                            batch: true,
                            pageSize: 10,
                            schema: {
                                model: {
                                    id: "ProductID",
                                    fields: {
                                        ProductID: { editable: false, nullable: true },
                                        ProductName: { validation: { required: true } },
                                        UnitPrice: { type: "number", validation: { required: true, min: 1} },
                                        Discontinued: { type: "boolean" },
                                        UnitsInStock: { type: "number", validation: { min: 0, required: true } }
                                    }
                                }
                            }
                        });

                    $("#grid").kendoGrid({
                        dataSource: dataSource,
                        pageable: true,
                        columns: [
                            { field:"ProductName", title: "Product Name" },
                            { field: "UnitPrice", title:"Unit Price", format: "{0:c}", width: "120px" },
                            { field: "UnitsInStock", title:"Units In Stock", width: "120px" },
                            { field: "Discontinued", width: "120px" },
                            { command: ["edit", "destroy"], title: "&nbsp;", width: "250px" }],
                        editable: "popup"
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
              <h1>Tables (Kendo grids)</h1>
              <h3>Grid / Popup editor</h3>
              <!-- Kendo MultiSelect -->
              <div class="example">
                <div class="row">
                  <div class="col-md-12">

                    <div id="grid"></div>

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
  var crudServiceBaseUrl = "//demos.telerik.com/kendo-ui/service",
  dataSource = new kendo.data.DataSource({
      transport: {
          read:  {
              url: crudServiceBaseUrl + "/Products",
              dataType: "jsonp"
          },
          update: {
              url: crudServiceBaseUrl + "/Products/Update",
              dataType: "jsonp"
          },
          destroy: {
              url: crudServiceBaseUrl + "/Products/Destroy",
              dataType: "jsonp"
          },
          create: {
              url: crudServiceBaseUrl + "/Products/Create",
              dataType: "jsonp"
          },
          parameterMap: function(options, operation) {
              if (operation !== "read" && options.models) {
                  return {models: kendo.stringify(options.models)};
              }
          }
      },
      batch: true,
      pageSize: 10,
      schema: {
          model: {
              id: "ProductID",
              fields: {
                  ProductID: { editable: false, nullable: true },
                  ProductName: { validation: { required: true } },
                  UnitPrice: { type: "number", validation: { required: true, min: 1} },
                  Discontinued: { type: "boolean" },
                  UnitsInStock: { type: "number", validation: { min: 0, required: true } }
              }
          }
      }
  });

  $("#grid").kendoGrid({
      dataSource: dataSource,
      pageable: true,
      columns: [
          { field:"ProductName", title: "Product Name" },
          { field: "UnitPrice", title:"Unit Price", format: "{0:c}", width: "120px" },
          { field: "UnitsInStock", title:"Units In Stock", width: "120px" },
          { field: "Discontinued", width: "120px" },
          { command: ["edit", "destroy"], title: "&nbsp;", width: "250px" }],
      editable: "popup"
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