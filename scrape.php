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
const inputVal = document.getElementById('myInput').value;

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

// const puppeteer = require('puppeteer');

// const inputValue = document.getElementById('myInput').value;

// (async () => {
//   const browser = await puppeteer.launch();
//   const page = await browser.newPage();
//   await page.goto('https://www.oeko-tex.com/en/label-check');

//   // Fill in the external input field
//   const externalInputField = await page.$('#ce9_searchstring');
//   await externalInputField.type(inputValue);

//   // Submit the form and wait for the page to load
//   await Promise.all([
//     page.click('#submit-button'),
//     page.waitForNavigation(),
//   ]);

//   // Get the contents of the new page
//   const html = await page.content();

//   console.log(html);

//   await browser.close();
// })();


// import { Actor } from '/node_modules/apify';
// import { PlaywrightCrawler } from '/node_modules/crawlee';

// await Actor.main(async () => {
//     const crawler = new PlaywrightCrawler({
//         async requestHandler({ request, page, enqueueLinks }) {
//             // Extract HTML title of the page.
//             const title = await page.title();
//             console.log(`Title of ${request.url}: ${title}`);

//             // Add URLs that point to the same hostname.
//             await enqueueLinks();
//         },
//     });

//     await crawler.run(['https://crawlee.dev/']);
// });


import { ApifyClient } from '/node_modules/apify-client';

// Initialize the ApifyClient with API token
const client = new ApifyClient({
    token: 'apify_api_rfRMzIgXeiaL46SdiSeLZiuyyDAb0B1PTyvd',
});

// Prepare actor input
const input = {
    "runMode": "DEVELOPMENT",
    "startUrls": [
        {
            "url": "https://crawlee.dev"
        }
    ],
    "linkSelector": "a[href]",
    "globs": [
        {
            "glob": "https://crawlee.dev/*/*"
        }
    ],
    "pseudoUrls": [],
    "pageFunction": // The function accepts a single argument: the "context" object.
    // For a complete list of its properties and functions,
    // see https://apify.com/apify/web-scraper#page-function 
    async function pageFunction(context) {
        // This statement works as a breakpoint when you're trying to debug your code. Works only with Run mode: DEVELOPMENT!
        // debugger; 
    
        // jQuery is handy for finding DOM elements and extracting data from them.
        // To use it, make sure to enable the "Inject jQuery" option.
        const $ = context.jQuery;
        const pageTitle = $('title').first().text();
        const h1 = $('h1').first().text();
        const first_h2 = $('h2').first().text();
        const random_text_from_the_page = $('p').first().text();
    
    
        // Print some information to actor log
        context.log.info(`URL: ${context.request.url}, TITLE: ${pageTitle}`);
    
        // Manually add a new page to the queue for scraping.
       await context.enqueueRequest({ url: 'http://www.example.com' });
    
        // Return an object with the data extracted from the page.
        // It will be stored to the resulting dataset.
        return {
            url: context.request.url,
            pageTitle,
            h1,
            first_h2,
            random_text_from_the_page
        };
    },
    "proxyConfiguration": {
        "useApifyProxy": true
    },
    "initialCookies": [],
    "waitUntil": [
        "networkidle2"
    ],
    "preNavigationHooks": `// We need to return array of (possibly async) functions here.
        // The functions accept two arguments: the "crawlingContext" object
        // and "gotoOptions".
        [
            async (crawlingContext, gotoOptions) => {
                // ...
            },
        ]`,
    "postNavigationHooks": `// We need to return array of (possibly async) functions here.
        // The functions accept a single argument: the "crawlingContext" object.
        [
            async (crawlingContext) => {
                // ...
            },
        ]`,
    "breakpointLocation": "NONE",
    "customData": {}
};

(async () => {
    // Run the actor and wait for it to finish
    const run = await client.actor("apify/web-scraper").call(input);

    // Fetch and print actor results from the run's dataset (if any)
    console.log('Results from dataset');
    const { items } = await client.dataset(run.defaultDatasetId).listItems();
    items.forEach((item) => {
        console.dir(item);
    });
})();


</script>
</body>
    </html>

