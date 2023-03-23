<html>
    <head>

    </head>
<body>
<form id="myForm">
    
    <input type="text" id="myInput" name="gotssearch" size="10" placeholder="Free Text (e.g. licence number, name of company)">
    <input type="submit" style="width:140px" value="Validate" >
</form>
<script type="module">
//     import fetch from '/node_modules/node-fetch';
// import { load } from '/node_modules/cheerio';
//     import * as cheerio from '/Applications/MAMP/htdocs/ConsiousCloset/node_modules/cheerio';

// import axios from '/Applications/MAMP/htdocs/ConsiousCloset/node_modules/axios';
// const inputValue = document.getElementById('myInput').value;

//     axios.get('https://www.oeko-tex.com/en/label-check').then(response => {
//                 const html = response.data;
//                 const $ = cheerio.load(html); // Now you can use Cheerio to manipulate the HTML content 
//             }).catch(error => { console.log(error); });

//     // const links = []; $('a').each((i, link) => { 
//     //     links.push($(link).attr('href')); 
//     // }); 
//     // console.log(links);
//     const form = document.getElementsByTagName('form'); // replace with your form ID 
//     const externalInputField = form.getElementById('ce9_searchstring');
//     externalInputField.value = inputValue;


//     form.addEventListener('submit', (event) => { 
//         event.preventDefault(); // prevent the default form submission behavior 
//         const formData = new FormData(form); 
//         const url = form.action; // the URL to submit the form to 
//         fetch(url, { method: 'POST', body: formData }) .then(response => response.text()) // get the text content of the response 
//         .then(data => { // `data` contains the contents of the new page 
//             console.log(data); }) 
//             .catch(error => { 
//                 console.error(error); 
//                 }); 
//             });

const puppeteer = require('puppeteer');

const inputValue = document.getElementById('myInput').value;

(async () => {
  const browser = await puppeteer.launch();
  const page = await browser.newPage();
  await page.goto('https://www.oeko-tex.com/en/label-check');

  // Fill in the external input field
  const externalInputField = await page.$('#ce9_searchstring');
  await externalInputField.type(inputValue);

  // Submit the form and wait for the page to load
  await Promise.all([
    page.click('#submit-button'),
    page.waitForNavigation(),
  ]);

  // Get the contents of the new page
  const html = await page.content();

  console.log(html);

  await browser.close();
})();

</script>
</body>
    </html>

