function openAllPagesByName(name) {
    openUrls(getLinksList(document.getElementsByName(name)));
}

function openLinks() {
    const urls = ['https://web.whatsapp.com/', 'https://webmailbeta.aruba.it/', 'https://app.chime.aws/', 'http://localhost:4000/Startpage.php'];
    openUrls(urls);
}

function openUrls(array) {
    array.forEach(element => {
        window.open(element);
    });
}

function getLinksList(array) {
    var linksList = [];
    array.forEach(element => {
        linksList.push(element.attributes.href.nodeValue);
    });
    return linksList;
}

function showAccordion(value) {
    document.getElementById(value).hidden = !document.getElementById(value).hidden;
}

function showMassiva() {
    console.log("MASSIVA");
    document.getElementById("massiva").hidden = !document.getElementById("massiva").hidden;
}