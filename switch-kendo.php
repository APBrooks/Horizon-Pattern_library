<?php
$section = 'Switch';
?>
<?php include 'includes/head.inc.php'; ?>
    <script>
        $(function() {
            $("#notifications-switch").kendoMobileSwitch();
            $("#mail-switch").kendoMobileSwitch({
                onLabel: "YES",
                offLabel: "NO"
            });
            $("#visible-switch").kendoMobileSwitch({
                checked: true
            });
            $("#name-switch").kendoMobileSwitch();
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
              <h3>Switch / Basic usage</h3>
              <!-- Kendo MultiSelect -->
              <div class="example" role="application">
                <div class="row">
                  <div class="col-md-4">
                    <ul>
                        <li>Notifications <input type="checkbox" id="notifications-switch" checked="checked" class="disabled" /></li>
                        <li>Send notifications <input id="mail-switch" /></li>
                        <li>Always visible <input id="visible-switch" /></li>
                        <li>Display real name <input id="name-switch" /></li>
                        <li>Disabled switch - on
                          <span class="km-switch km-widget km-switch-on km-switch-disabled">
                            <input type="checkbox" id="notifications-switch" checked="checked" data-role="switch" class="km-widget">        
                            <span class="km-switch-wrapper">
                              <span class="km-switch-background" style="margin-left: 30px;"></span>
                            </span>         
                            <span class="km-switch-container">
                              <span class="km-switch-handle" style="transform: translateX(30px);">             
                                <span class="km-switch-label-on">Yes</span>             
                                <span class="km-switch-label-off">No</span>         
                              </span>     
                            </span>
                          </span>
                        </li>
                        <li>Disabled switch - off
                          <span class="km-switch km-widget km-switch-off km-switch-disabled">
                            <input type="checkbox" id="notifications-switch" checked="checked" data-role="switch" class="km-widget">        
                            <span class="km-switch-wrapper">
                              <span class="km-switch-background" style="margin-left: 0px;"></span>
                            </span>         
                            <span class="km-switch-container">
                              <span class="km-switch-handle" style="transform: translateX(0px);">             
                                <span class="km-switch-label-on">Yes</span>             
                                <span class="km-switch-label-off">No</span>         
                              </span>     
                            </span>
                          </span>
                        </li>
                        <!-- <li>
                          <span class="km-switch km-widget km-switch-on">
                            <input id="visible-switch" data-role="switch" class="km-widget" type="checkbox">        
                            <span class="km-switch-wrapper">
                              <span class="km-switch-background" style="margin-left: 30px;"></span></span>         
                              <span class="km-switch-container"><span class="km-switch-handle" style="transform: translateX(30px);">             <span class="km-switch-label-on">on</span>             <span class="km-switch-label-off">off</span>         </span>     </span></span>
                        </li> -->
                    </ul>
                  </div>
                </div>
                <style>
                    .example ul {
                        margin: 0;
                        padding: 0;
                    }
                    .example ul li {
                        margin: 0;
                        padding: 10px 10px 10px 20px;
                        min-height: 28px;
                        line-height: 28px;
                        vertical-align: middle;
                        border-top: 1px solid rgba(128,128,128,.5);
                        list-style-type: none;
                    }
                    .example {
                        min-width: 220px;
                        margin-top: 50px;
                        padding: 0;
                    }
                    .example ul li .km-switch {
                        float: right;
                    }
                </style>
                
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <pre>
<h4>Initiate switches</h4>
                <code class="language-html" data-lang="html">
&lt;li&gt;Notifications &lt;input type=&quot;checkbox&quot; id=&quot;notifications-switch&quot; checked=&quot;checked&quot; class=&quot;disabled&quot; /&gt;&lt;/li&gt;
&lt;li&gt;Send notifications &lt;input id=&quot;mail-switch&quot; /&gt;&lt;/li&gt;
&lt;li&gt;Always visible &lt;input id=&quot;visible-switch&quot; /&gt;&lt;/li&gt;
&lt;li&gt;Display real name &lt;input id=&quot;name-switch&quot; /&gt;&lt;/li&gt;
</code>
<h4>Hard code disabled switches</h4>
<code class="language-html" data-lang="html">
&lt;li&gt;Disabled switch - on
  &lt;span class=&quot;km-switch km-widget km-switch-on km-switch-disabled&quot;&gt;
    &lt;input type=&quot;checkbox&quot; id=&quot;notifications-switch&quot; checked=&quot;checked&quot; data-role=&quot;switch&quot; class=&quot;km-widget&quot;&gt;        
    &lt;span class=&quot;km-switch-wrapper&quot;&gt;
      &lt;span class=&quot;km-switch-background&quot; style=&quot;margin-left: 30px;&quot;&gt;&lt;/span&gt;
    &lt;/span&gt;         
    &lt;span class=&quot;km-switch-container&quot;&gt;
      &lt;span class=&quot;km-switch-handle&quot; style=&quot;transform: translateX(30px);&quot;&gt;             
        &lt;span class=&quot;km-switch-label-on&quot;&gt;Yes&lt;/span&gt;             
        &lt;span class=&quot;km-switch-label-off&quot;&gt;No&lt;/span&gt;         
      &lt;/span&gt;     
    &lt;/span&gt;
  &lt;/span&gt;
&lt;/li&gt;
&lt;li&gt;Disabled switch - off
  &lt;span class=&quot;km-switch km-widget km-switch-off km-switch-disabled&quot;&gt;
    &lt;input type=&quot;checkbox&quot; id=&quot;notifications-switch&quot; checked=&quot;checked&quot; data-role=&quot;switch&quot; class=&quot;km-widget&quot;&gt;        
    &lt;span class=&quot;km-switch-wrapper&quot;&gt;
      &lt;span class=&quot;km-switch-background&quot; style=&quot;margin-left: 0px;&quot;&gt;&lt;/span&gt;
    &lt;/span&gt;         
    &lt;span class=&quot;km-switch-container&quot;&gt;
      &lt;span class=&quot;km-switch-handle&quot; style=&quot;transform: translateX(0px);&quot;&gt;             
        &lt;span class=&quot;km-switch-label-on&quot;&gt;Yes&lt;/span&gt;             
        &lt;span class=&quot;km-switch-label-off&quot;&gt;No&lt;/span&gt;         
      &lt;/span&gt;     
    &lt;/span&gt;
  &lt;/span&gt;
&lt;/li&gt;
                </code>
                <code class="language-js" datalang="javascript">
$(function() {
    $("#notifications-switch").kendoMobileSwitch();
    $("#mail-switch").kendoMobileSwitch({
        onLabel: "YES",
        offLabel: "NO"
    });
    $("#visible-switch").kendoMobileSwitch({
        checked: true
    });
    $("#name-switch").kendoMobileSwitch();
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