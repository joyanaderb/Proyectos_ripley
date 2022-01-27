$(function() {
 var table = $("#table_1").DataTable();

 // Date range vars
 minDateFilter = "";
 maxDateFilter = "";

 $("#daterange").daterangepicker();
 $("#daterange").on("apply.daterangepicker", function(ev, picker) {
  minDateFilter = Date.parse(picker.startDate);
  maxDateFilter = Date.parse(picker.endDate);
  
  $.fn.dataTable.ext.search.push(function(settings, data, dataIndex) {
  var date = Date.parse(data[1]);

  if (
   (isNaN(minDateFilter) && isNaN(maxDateFilter)) ||
   (isNaN(minDateFilter) && date <= maxDateFilter) ||
   (minDateFilter <= date && isNaN(maxDateFilter)) ||
   (minDateFilter <= date && date <= maxDateFilter)
  ) {
   return true;
  }
  return false;
 });
 table.draw();
}); 
  

});