<div id="test">

</div>

<script>
var req = new XMLHttpRequest();
req.open('DELETE', 'http://localhost:3000/books/4');
req.send();

req.onreadystatechange = function (e) {
  if (req.readyState === XMLHttpRequest.DONE) {
    if(req.status === 200) {
      console.log(req.responseText);
    } else {
      console.log("Error!");
    }
  }
};
</script>