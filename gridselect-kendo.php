<?php
$section = 'GridSelect';
?>
<?php include 'includes/head.inc.php'; ?>
<script src="javascripts/orders.js"></script>

    <script>
      $(document).ready(function() {
          $("#rowSelection").kendoGrid({
              dataSource: {
                  data: orders,
                  pageSize: 10
              },
              selectable: "multiple",
              pageable: {
                  buttonCount: 3
              },
              scrollable: false,
              navigatable: true,
              columns: [
                  {
                      field: "ShipCountry",
                      title: "Ship Country",
                      width: 300
                  },
                  {
                      field: "Freight",
                      width: 150
                  },
                  {
                      field: "OrderDate",
                      title: "Order Date",
                      format: "{0:dd/MM/yyyy}"
                  }
              ]
          });
          //DataSource definition
          var crudServiceBaseUrl = "http://demos.kendoui.com/service",
          dataSource = new kendo.data.DataSource({
              transport: {
                  read: {
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
                  parameterMap: function (options, operation) {
                      if (operation !== "read" && options.models) {
                          return {
                              models: kendo.stringify(options.models)
                          };
                      }
                  }
              },
              batch: true,
              pageSize: 5,
              schema: {
                  model: {
                      id: "ProductID",
                      fields: {
                          ProductID: {
                              editable: false,
                              nullable: true
                          },
                          ProductName: {
                              validation: {
                                  required: true
                              }
                          },
                          UnitPrice: {
                              type: "number",
                              validation: {
                                  required: true,
                                  min: 1
                              }
                          },
                          Discontinued: {
                              type: "boolean"
                          },
                          UnitsInStock: {
                              type: "number",
                              validation: {
                                  min: 0,
                                  required: true
                              }
                          }
                      }
                  }
              }
          });

          //Grid definition
          var grid = $("#grid-checkbox").kendoGrid({
              dataSource: dataSource,
              pageable: {
                  buttonCount: 3
              },
              scrollable: false,
              navigatable: true,
              //define dataBound event handler
              dataBound: onDataBound,
              columns: [
              //define template column with checkbox and attach click event handler
              { template: "<input type='checkbox' class='checkbox' />", width: "25px" },
              "ProductName", {
                  field: "UnitPrice",
                  title: "Unit Price",
                  format: "{0:c}",
                  width: "100px"
                  }, {
                  field: "UnitsInStock",
                  title: "Units In Stock",
                  width: "100px"
                  }, {
                  field: "Discontinued",
                  width: "100px"
                  }, {
                  command: ["destroy"],
                  title: "&nbsp;",
                  width: "172px"
              }
              ],
              editable: "inline"
          }).data("kendoGrid");

          //bind click event to the checkbox
          grid.table.on("click", ".checkbox" , selectRow);

          $("#showSelection").bind("click", function () {
              var checked = [];
              for(var i in checkedIds){
                  if(checkedIds[i]){
                      checked.push(i);
                  }
              }

              alert(checked);
          });
      });

      var checkedIds = {};

      //on click of the checkbox:
      function selectRow() {
          var checked = this.checked,
          row = $(this).closest("tr"),
          grid = $("#grid-checkbox").data("kendoGrid"),
          dataItem = grid.dataItem(row);

          checkedIds[dataItem.id] = checked;
          if (checked) {
              //-select the row
              row.addClass("k-state-selected");
              } else {
              //-remove selection
              row.removeClass("k-state-selected");
          }
      }

      //on dataBound event restore previous selected rows:
      function onDataBound(e) {
          var view = this.dataSource.view();
          for(var i = 0; i < view.length;i++){
              if(checkedIds[view[i].id]){
                  this.tbody.find("tr[data-uid='" + view[i].uid + "']")
                  .addClass("k-state-selected")
                  .find(".checkbox")
                  .attr("checked","checked");
              }
          }
      }
    </script>
  </head>
  <body>
    <?php include 'includes/top_nav.inc.php'; ?>
    
        <?php include 'includes/left_nav.inc.php'; ?>

        <!-- MAIN CONTENT -->
        <div class="col-md-9">
          

          <div class="row">
            <div class="col-md-6">
              <h1>Tables (Kendo grids)</h1>
              <h3>Grid / Selection</h3>
              <!-- Kendo MultiSelect -->
              <div class="example">
                <div class="row">
                  <div class="col-md-12">

                    <div id="rowSelection"></div>

                  </div>
                </div>
                
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <pre>
                <code class="language-html" data-lang="html">
&lt;div id=&quot;rowSelection&quot;&gt;&lt;/div&gt;
                </code>
                <code class="language-js" datalang="javascript">
$(document).ready(function() {
  $("#rowSelection").kendoGrid({
        dataSource: {
            data: orders,
            pageSize: 10
        },
        selectable: "multiple",
        pageable: {
            buttonCount: 3
        },
        scrollable: false,
        navigatable: true,
        columns: [
            {
                field: "ShipCountry",
                title: "Ship Country",
                width: 300
            },
            {
                field: "Freight",
                width: 150
            },
            {
                field: "OrderDate",
                title: "Order Date",
                format: "{0:dd/MM/yyyy}"
            }
        ]
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

          <div class="row">
            <div class="col-md-12">
              <h1>Tables (Kendo grids)</h1>
              <h3>Grid / Selection with checkboxes</h3>
              <!-- Kendo MultiSelect -->
              <div class="example">
                <div class="row">
                  <div class="col-md-12">

                    <div id="grid-checkbox"></div>
                    <button id="showSelection" class="btn btn-default">Show selected IDs</button>

                  </div>
                </div>
                
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <pre>
                <code class="language-html" data-lang="html">
&lt;div id=&quot;grid-checkbox&quot;&gt;&lt;/div&gt;

&lt;button id=&quot;showSelection&quot; class=&quot;btn btn-default&quot;&gt;Show selected IDs&lt;/button&gt;
                </code>
                <code class="language-js" datalang="javascript">
$(document).ready(function() {
//DataSource definition
  var crudServiceBaseUrl = "http://demos.kendoui.com/service",
  dataSource = new kendo.data.DataSource({
      transport: {
          read: {
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
          parameterMap: function (options, operation) {
              if (operation !== "read" && options.models) {
                  return {
                      models: kendo.stringify(options.models)
                  };
              }
          }
      },
      batch: true,
      pageSize: 5,
      schema: {
          model: {
              id: "ProductID",
              fields: {
                  ProductID: {
                      editable: false,
                      nullable: true
                  },
                  ProductName: {
                      validation: {
                          required: true
                      }
                  },
                  UnitPrice: {
                      type: "number",
                      validation: {
                          required: true,
                          min: 1
                      }
                  },
                  Discontinued: {
                      type: "boolean"
                  },
                  UnitsInStock: {
                      type: "number",
                      validation: {
                          min: 0,
                          required: true
                      }
                  }
              }
          }
      }
  });

  //Grid definition
  var grid = $("#grid-checkbox").kendoGrid({
      dataSource: dataSource,
      pageable: {
          buttonCount: 3
      },
      scrollable: false,
      navigatable: true,
      //define dataBound event handler
      dataBound: onDataBound,
      columns: [
      //define template column with checkbox and attach click event handler
      { template: "<input type='checkbox' class='checkbox' />" },
      "ProductName", {
          field: "UnitPrice",
          title: "Unit Price",
          format: "{0:c}",
          width: "100px"
          }, {
          field: "UnitsInStock",
          title: "Units In Stock",
          width: "100px"
          }, {
          field: "Discontinued",
          width: "100px"
          }, {
          command: ["destroy"],
          title: "&nbsp;",
          width: "172px"
      }
      ],
      editable: "inline"
  }).data("kendoGrid");

  //bind click event to the checkbox
  grid.table.on("click", ".checkbox" , selectRow);

  $("#showSelection").bind("click", function () {
      var checked = [];
      for(var i in checkedIds){
          if(checkedIds[i]){
              checked.push(i);
          }
      }

      alert(checked);
  });
});

var checkedIds = {};

//on click of the checkbox:
function selectRow() {
  var checked = this.checked,
  row = $(this).closest("tr"),
  grid = $("#grid-checkbox").data("kendoGrid"),
  dataItem = grid.dataItem(row);

  checkedIds[dataItem.id] = checked;
  if (checked) {
      //-select the row
      row.addClass("k-state-selected");
      } else {
      //-remove selection
      row.removeClass("k-state-selected");
  }
}

//on dataBound event restore previous selected rows:
function onDataBound(e) {
  var view = this.dataSource.view();
  for(var i = 0; i < view.length;i++){
      if(checkedIds[view[i].id]){
          this.tbody.find("tr[data-uid='" + view[i].uid + "']")
          .addClass("k-state-selected")
          .find(".checkbox")
          .attr("checked","checked");
      }
  }
}
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