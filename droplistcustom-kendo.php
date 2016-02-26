<?php
$section = 'DroplistCustom';
?>
<?php include 'includes/head.inc.php'; ?>
    <script>
      $(document).ready(function() {
        $("#customers").kendoDropDownList({
            dataTextField: "ContactName",
            dataValueField: "CustomerID",
            headerTemplate: '<div class="dropdown-header k-widget k-header">' +
                    
                    '<span>Contact info</span>' +
                '</div>',
            valueTemplate: '<span>#:data.CompanyName#</span> - <span>#:data.ContactName#</span>',
            template: '<span class="k-state-default"><h3>#: data.ContactName #</h3><p>#: data.CompanyName #</p></span>',
            dataSource: {
                transport: {
                    read: {
                        dataType: "jsonp",
                        url: "//demos.telerik.com/kendo-ui/service/Customers",
                    }
                }
            },
            height: 400
        });

        var dropdownlist = $("#customers").data("kendoDropDownList");
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
              <h3>DropDownList / Customizing templates</h3>
              <!-- Kendo MultiSelect -->
              <div class="example">
                <div class="row">
                  <div class="col-md-4">

                    <div class="demo-section k-content">
                        <h4>Customers</h4>
                        <input id="customers" style="width: 100%;"/>
                        <p class="demo-hint">
                            Open the DropDownList to see the customized appearance.
                        </p>
                    </div>
                    <style>

                .dropdown-header {
                    border-width: 0 0 1px 0;
                    text-transform: uppercase;
                    padding: 0;
                }

                .dropdown-header > span {
                    display: inline-block;
                    padding: 10px;
                }

                /*.dropdown-header > span:first-child {
                    width: 50px;
                }*/

                .selected-value {
                    display: inline-block;
                    vertical-align: middle;
                    width: 24px;
                    height: 24px;
                    background-size: 100%;
                    margin-right: 5px;
                    border-radius: 50%;
                }

                #customers-list .k-item {
                    line-height: 1em;
                    /*min-width: 300px;*/
                }
                
                /* Material Theme padding adjustment*/
                
                .k-material #customers-list .k-item,
                .k-material #customers-list .k-item.k-state-hover,
                .k-materialblack #customers-list .k-item,
                .k-materialblack #customers-list .k-item.k-state-hover {
                    padding-left: 5px;
                    border-left: 0;
                }

                #customers-list .k-item > span {
                    -webkit-box-sizing: border-box;
                    -moz-box-sizing: border-box;
                    box-sizing: border-box;
                    display: inline-block;
                    vertical-align: top;
                    margin: 20px 10px 10px 5px;
                }

                /*#customers-list .k-item > span:first-child {
                    -moz-box-shadow: inset 0 0 30px rgba(0,0,0,.3);
                    -webkit-box-shadow: inset 0 0 30px rgba(0,0,0,.3);
                    box-shadow: inset 0 0 30px rgba(0,0,0,.3);
                    margin: 10px;
                    width: 50px;
                    height: 50px;
                    border-radius: 50%;
                    background-size: 100%;
                    background-repeat: no-repeat;
                }*/

                #customers-list h3 {
                    font-size: 1.2em;
                    font-weight: normal;
                    margin: 0 0 1px 0;
                    padding: 0;
                }

                #customers-list p {
                    margin: 0;
                    padding: 0;
                    font-size: .8em;
                }

            </style>

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