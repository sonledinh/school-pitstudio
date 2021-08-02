
function dragNdrop(event) {
    var fileName = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("preview");
    var previewImg = document.createElement("img");
    previewImg.setAttribute("src", fileName);
    preview.innerHTML = "";
    preview.appendChild(previewImg);
}
function drag() {
    document.getElementById('uploadFile').parentNode.className = 'draging dragBox';
}
function drop() {
    document.getElementById('uploadFile').parentNode.className = 'dragBox';
} 

$('.btn-plus-main a').click(function(event) {
    $('.add-course, body, .bg-modal').addClass('active');
});

$('.clc-edit-course').click(function(event) {
    $('.edit-course, body, .bg-modal').addClass('active');
});

$('.close-modal a').click(function(event) {
    $('.box-add-course, body, .bg-modal').removeClass('active');
});

$('.close-alert').click(function(event) {
    $('.note-alert').removeClass('active');
});

$('.clc-unlock').click(function(event) {
    $('.note-unlock').addClass('active');
    setTimeout(function(){
        $('.note-alert').removeClass('active');
    }, 5000);
});
$('.clc-trash').click(function(event) {
    $('.note-delete').addClass('active');
    setTimeout(function(){
        $('.note-alert').removeClass('active');
    }, 5000);
});