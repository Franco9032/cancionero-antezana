<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chord Analyzer</title>
</head>
<body>
  <h1>Chord Analyzer</h1>
  <form action="/analyze" method="post">
    <input type="text" name="song" placeholder="Enter a song">
    <input type="submit" value="Analyze">
  </form>
  <div id="results"></div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    function analyzeSong() {
      var song = $("#song").val();
      $.ajax({
        url: "/analyze",
        data: { song: song },
        dataType: "json",
        success: function(data) {
          if (data.error) {
            alert(data.error);
          } else {
            $("#results").html(data.results);
          }
        }
      });
    }
    $("#analyze").click(analyzeSong);
  </script>
</body>
</html>