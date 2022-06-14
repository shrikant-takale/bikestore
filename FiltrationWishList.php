<!doctype html>
<?php include("includes/header.php");
include("includes/menu2.php");
include("menu.php");
include("includes/connection.php");
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
      <title>Autocomplete textbox using jQuery, PHP and MySQL by CodexWorld</title>
      <link rel="stylesheet" href="css/jquery-ui.css">
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/jquery-ui.js"></script>
		<script type="text/javascript" src="js/fusioncharts.js"></script>
		<script type="text/javascript" src="js/themes/fusioncharts.theme.fint.js"></script>
        
        <script>
          $( function() {
          $( "#datepickerFrom" ).datepicker({
          showOn: "button",
          buttonImage: "images/calendar.gif",
          buttonImageOnly: true,
          buttonText: "Select date"
          });

          $( "#datepickerTo" ).datepicker({
          showOn: "button",
          buttonImage: "images/calendar.gif",
          buttonImageOnly: true,
          buttonText: "Select date"
          });
          
          } );


          $(function() {
          $( "#skills" ).autocomplete({
          source: 'bike.php',
          select: function(event, ui) {
          $("#skills").val(ui.item.label);
          //$("#searchForm").submit();
			bindData(ui.item.label);
          }
          });
          });
		  
		  function bindData(bikename){
			  $.ajax({
				url: 'bikedata.php',
			  data: {
				 format: 'json'
			  },
			  error: function() {
				 $('#info').html('<p>An error has occurred</p>');
			  },
			  dataType: 'jsonp',
			  success: function(data) {
				/* var $title = $('<h1>').text(data.talks[0].talk_title);
				 var $description = $('<p>').text(data.talks[0].talk_description);
				 $('#info')
					.append($title)
					.append($description);*/
					fusionChartBind(data);
			  },
			  type: 'GET'
			});
			  
		  }
		  
		  function fusionChartBind(JsonData){
			  
			     var revenueChart = new FusionCharts({
				  "type": "column2d",
				  "renderAt": "chartContainer",
				  "width": "900",
				  "height": "600",
				  "dataFormat": "json",
				  "dataSource":  {
				  "chart": {
				  "caption": "Monthly Count of Wish List For CBR Bike",
				  "subCaption": "Customer Wish List",
				  "xAxisName": "Month",
				  "yAxisName": "Count of Wish List",
				  "theme": "fint"
				  },
				  "data": JsonData
				  }

			});
			revenueChart.render();
		  }
        </script>
      </head>
  <body>
    <br>
      <form action="SearchWishList.php" id="searchForm" method="post">
        <center>
          <div class="ui-widget">
            <table class="imagetable">
              <tr>
                <td colsspan="6" style="font-weight:bold;">
                  <center>Search for Wish  List</center>
                </td>
              </tr>
              <tr>
                <td align="right">From Date:</td>
                <td align="left"><input type="text" id="datepickerFrom">
                </td>
                <td align="right">To Date:</td>
                <td align="left">
                  <input type="text" id="datepickerTo">
                </td>
                <td align="right"><label for="skills">Search bike: </label>
                </td>
                <td align="left">
                  <input id="skills" type="text" name="bikename"> 
                </td>
              </tr>
            </table>
  </center>
        <br>
          </div>
		  <div>
		  <div id="chartContainer"></div>
		  </div>
        </form>
    </body>
</html>
<?php include("includes/footer.php");?>