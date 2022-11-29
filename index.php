<!DOCTYPE html>
<html>
<body>
<script>
function validateForm() {
  let x = document.getElementById("fname").value;
  if (x == "") {
    alert("Name must be filled out");
  } else {
  	document.getElementById("res").innerHTML = x;
    // Consume the function as follows:
    const file = createBlob(x);
    saveAs(file, "myFile.txt");
  }
}

function createBlob(data) {
  return new Blob([data], { type: "text/plain" });
}

function saveAs() {
  const a = document.createElement("a");
  a.href = './myFile.txt';
  a.download = "myFile.txt";
  a.click();
}
</script>

<div>
  <textarea id="fname"></textarea><br>
  <button onClick="validateForm()"> Submit </button>
</div> 

<p id="res"></p>

</body>
</html>

