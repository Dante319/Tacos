$("#first-choice").change(function() {
  $("#second-choice").load("restaurants.php?choice=" + $("#first-choice").val());
});
