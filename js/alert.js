function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

async function alertSend(content) {
    const text = String(content);
    const alertBox = document.querySelector('#alert');
    alertBox.innerHTML='<div class="alert"><p>'+text+'</p></div>';
    await sleep(5000);
    alertBox.innerHTML='';
}