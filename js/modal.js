const exit_btn = document.querySelector('.exit_btn');
const copy_btn = document.querySelector('.copy_btn');

function modal(data) {

    const password = String(data);
    const generated_password = document.querySelector('.generated_password');

    generated_password.value = password;

    copy_btn.setAttribute('data-before','Copy');

    const modal_classes = [
        document.querySelector('.modal'),
        document.querySelector('.overlay'),
        document.querySelector('.con'),
        document.querySelector('.footer')
    ];

    for(let i = 0; i<modal_classes.length; i++) {
        modal_classes[i].classList.toggle('modalactive');
    }

}

function copyPassword() {

    const generated_password = document.querySelector('.generated_password');
    navigator.clipboard.writeText(generated_password.value);

    copy_btn.setAttribute('data-before','Copied!');
    
}

exit_btn.addEventListener('click', function() {
    modal(null);
})

copy_btn.addEventListener('click', function() {
    copyPassword();
})