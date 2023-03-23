import cheerio from 'cheerio';

    import axios from 'axios';
    axios.get('https://www.oeko-tex.com/en/label-check').then(response => {
                const html = response.data;
                const $ = cheerio.load(html); // Now you can use Cheerio to manipulate the HTML content 
            }).catch(error => { console.log(error); });

    // const links = []; $('a').each((i, link) => { 
    //     links.push($(link).attr('href')); 
    // }); 
    // console.log(links);
    const form = document.getElementsByTagName('form'); // replace with your form ID 
    form.addEventListener('submit', (event) => { 
        event.preventDefault(); // prevent the default form submission behavior 
        const formData = new FormData(form); 
        const url = form.action; // the URL to submit the form to 
        fetch(url, { method: 'POST', body: formData }) .then(response => response.text()) // get the text content of the response 
        .then(data => { // `data` contains the contents of the new page 
            console.log(data); }) 
            .catch(error => { 
                console.error(error); 
                }); 
            });