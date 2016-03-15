<?php
$section = 'GridEdit';
?>
<?php include 'includes/head.inc.php'; ?>
<script src="javascripts/products.js"></script>
    <script>
      $(document).ready(function () {
          var dataSource = new kendo.data.DataSource({
             pageSize: 10,
             data: products,
             autoSync: true,
             schema: {
                 model: {
                   id: "ProductID",
                   fields: {
                      ProductID: { editable: false, nullable: true },
                      ProductName: { validation: { required: true } },
                      Category: { defaultValue: { CategoryID: 1, CategoryName: "Beverages"} },
                      UnitPrice: { type: "number", validation: { required: true, min: 1} }
                   }
                 }
             }
          });

          $("#grid").kendoGrid({
              dataSource: dataSource,
              pageable: true,
              columns: [
                  { field:"ProductName",title:"Product Name" },
                  { field: "Category", title: "Category", width: "180px", editor: categoryDropDownEditor, template: "#=Category.CategoryName#" },
                  { field: "UnitPrice", title:"Unit Price", format: "{0:c}", width: "130px" },
                  { command: "destroy", title: " ", width: "150px" }],
              editable: true
          });
      });

      function categoryDropDownEditor(container, options) {
          $('<input required data-text-field="CategoryName" data-value-field="CategoryID" data-bind="value:' + options.field + '"/>')
              .appendTo(container)
              .kendoDropDownList({
                  autoBind: false,
                  dataSource: {
                      type: "odata",
                      transport: {
                          read: "//demos.telerik.com/kendo-ui/service/Northwind.svc/Categories"
                      }
                  }
              });
      }

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
              <h3>Grid / Editing custome editor</h3>
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
  var dataSource = new kendo.data.DataSource({
     pageSize: 10,
     data: products,
     autoSync: true,
     schema: {
         model: {
           id: "ProductID",
           fields: {
              ProductID: { editable: false, nullable: true },
              ProductName: { validation: { required: true } },
              Category: { defaultValue: { CategoryID: 1, CategoryName: "Beverages"} },
              UnitPrice: { type: "number", validation: { required: true, min: 1} }
           }
         }
     }
  });

  $("#grid").kendoGrid({
      dataSource: dataSource,
      pageable: true,
      columns: [
          { field:"ProductName",title:"Product Name" },
          { field: "Category", title: "Category", width: "180px", editor: categoryDropDownEditor, template: "#=Category.CategoryName#" },
          { field: "UnitPrice", title:"Unit Price", format: "{0:c}", width: "130px" },
          { command: "destroy", title: " ", width: "150px" }],
      editable: true
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