$("#open-sidebar").click(function(){
  $(".cust-sidebar-div").addClass("active");
});

$("#close-sidebar").click(function(){
  $(".cust-sidebar-div").removeClass("active");
});


// 4s loading
var uri = document.getElementById("uri");
window.setTimeout(function() {
  // Move to a new location
  window.location.href = uri.href;
}, 5000);
