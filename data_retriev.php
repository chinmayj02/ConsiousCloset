<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data test</title>
</head>
<body>
<form id="myForm">
    
    <input type="text" id="myInput" name="gotssearch" size="10" placeholder="Free Text (e.g. licence number, name of company)">
    <input type="submit" style="width:140px" value="Validate" >
</form>
<!-- <iframe id="theFrame" src="https://global-standard.org/find-suppliers-shops-and-inputs/certified-suppliers/database/search/" frameborder="0"> -->
</iframe>
<script>
// Get the form element by its ID
const form = document.getElementById('myForm');

// Add an event listener for when the form is submitted
form.addEventListener('submit', (event) => {
  // Prevent the form from submitting normally
  event.preventDefault();

  // Get the value of the input field
  const inputValue = document.getElementById('myInput').value;

  // URL of the external website
const externalWebsite = 'https://www.oeko-tex.com/en/label-check';

// Get the HTML code of the external website using the fetch() function
fetch(externalWebsite, { mode: 'no-cors'})
  .then(response => response.text())
  .then(html => {
    // Parse the HTML code using a DOMParser object
    const parser = new DOMParser();
    const doc = parser.parseFromString(html, 'text/html');

    console.log(doc);

    // Get the input field on the external website by its ID
    const externalInputField = doc.getElementById('ce9_searchstring');


  // Set the value of the input field on the external website
  externalInputField.value = inputValue;

  // Submit the form on the external website
  externalInputField.form.submit();
  });
const externalWebsite1 = 'https://www.oeko-tex.com/en/label-check?tx_avsite_validitycheck%5Baction%5D=check&tx_avsite_validitycheck%5Bcontroller%5D=Validity&cHash=07353bd4b930f358743a3f1b45bf9364#c9';

// Get the HTML code of the external website using the fetch() function
fetch(externalWebsite1, { mode: 'no-cors'})
  .then(response => response.text())
  .then(html => {
    // Parse the HTML code using a DOMParser object
    const parser = new DOMParser();
    const doc = parser.parseFromString(html, 'text/html');

    console.log(doc);

    // Get the input field on the external website by its ID
    const externalvalidationField = doc.querySelector('.alert-heading');

console.log(externalvalidationField);
  });
});



</script>
</body>
</html>
