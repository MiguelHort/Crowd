function toggleExpand() {
  var expandText = document.getElementById("expandText");
  var arrow = document.getElementById("arrow");
  
  expandText.classList.toggle("show");
  arrow.classList.toggle("rotate");
}