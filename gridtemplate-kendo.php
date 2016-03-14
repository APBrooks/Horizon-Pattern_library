<?php
$section = 'GridTemplate';
?>
<?php include 'includes/head.inc.php'; ?>
    <script>
      $(document).ready(function() {
                    var element = $("#grid-template").kendoGrid({
                        dataSource: {
                            type: "odata",
                            transport: {
                                read: "//demos.telerik.com/kendo-ui/service/Northwind.svc/Employees"
                            },
                            pageSize: 5,
                            serverPaging: true,
                            serverSorting: true
                        },
                        sortable: true,
                        pageable: true,
                        detailTemplate: kendo.template($("#template").html()),
                        detailInit: detailInit,
                        dataBound: function() {
                            this.expandRow(this.tbody.find("tr.k-master-row").first());
                        },
                        columns: [
                            {
                                field: "FirstName",
                                title: "First Name",
                                width: "120px"
                            },
                            {
                                field: "LastName",
                                title: "Last Name",
                                width: "120px"
                            },
                            {
                                field: "Country",
                                width: "120px"
                            },
                            {
                                field: "City",
                                width: "120px"
                            },
                            {
                                field: "Title"
                            }
                        ]
                    });
                });

                function detailInit(e) {
                    var detailRow = e.detailRow;

                    detailRow.find(".tabstrip").kendoTabStrip({
                        animation: {
                            open: { effects: "fadeIn" }
                        }
                    });

                    detailRow.find(".orders").kendoGrid({
                        dataSource: {
                            type: "odata",
                            transport: {
                                read: "//demos.telerik.com/kendo-ui/service/Northwind.svc/Orders"
                            },
                            serverPaging: true,
                            serverSorting: true,
                            serverFiltering: true,
                            pageSize: 7,
                            filter: { field: "EmployeeID", operator: "eq", value: e.data.EmployeeID }
                        },
                        scrollable: false,
                        sortable: true,
                        pageable: true,
                        columns: [
                            { field: "OrderID", title:"ID", width: "70px" },
                            { field: "ShipCountry", title:"Ship Country", width: "110px" },
                            { field: "ShipAddress", title:"Ship Address" },
                            { field: "ShipName", title: "Ship Name", width: "300px" }
                        ]
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
              <h1>Form Elements</h1>
              <h3>Grid / Basic usage</h3>
              <!-- Kendo MultiSelect -->
              <div class="example">
                <div class="row">
                  <div class="col-md-6">

                    <div id="grid-template"></div>

                    <script type="text/x-kendo-template" id="template">
                        <div class="tabstrip">
                            <ul>
                                <li class="k-state-active">
                                   Orders
                                </li>
                                <li>
                                    Contact Information
                                </li>
                            </ul>
                            <div>
                                <div class="orders"></div>
                            </div>
                            <div>
                                <div class='employee-details'>
                                    <ul>
                                        <li><label>Country:</label>#= Country #</li>
                                        <li><label>City:</label>#= City #</li>
                                        <li><label>Address:</label>#= Address #</li>
                                        <li><label>Home Phone:</label>#= HomePhone #</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </script>

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
        pageSize: 50
    },
    scrollable: false,
    sortable: true,
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