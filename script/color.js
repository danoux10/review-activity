// toggle form
var addBtn = document.getElementById('addBtn');
var updateBtn = document.getElementById('updateBtn');

var addView = document.getElementById('color_add');
var updateView = document.getElementById('color_update');

addBtn.classList.add('active');
updateBtn.classList.add('desactive');

addView.classList.add('show');
updateView.classList.add('hidden');

function toggleAdd(){
    if (addBtn.classList.contains('desactive')){
        addBtn.classList.add('active');
        addBtn.classList.remove('desactive');
        updateBtn .classList.remove('active');
        updateBtn .classList.add('desactive');
        addView.classList.add('show');
        addView.classList.remove('hidden');
        updateView.classList.add('hidden');
        updateView.classList.remove('show');
    }else{
        addBtn.classList.remove('active');
        addBtn.classList.add('desactive');
        addView.classList.remove('show');
        addView.classList.add('hidden');
    }
}
function toggleUpdate(){
    if (updateBtn.classList.contains('desactive')){
        addBtn.classList.remove('active');
        addBtn.classList.add('desactive');
        updateBtn .classList.add('active');
        updateBtn .classList.remove('desactive');
        addView.classList.remove('show');
        addView.classList.add('hidden');
        updateView.classList.remove('hidden');
        updateView.classList.add('show');
    }else{
        updateBtn.classList.remove('active');
        updateBtn.classList.add('desactive');
        updateView.classList.remove('show');
        updateView.classList.add('hidden');
    }
}

addBtn.addEventListener('click',toggleAdd);
updateBtn.addEventListener('click',toggleUpdate);


//toggle preview
var previewBtn = document.getElementById('previeBtn');
var previewContent = document.getElementById('previewColor');

previewBtn.classList.add('active');
previewContent.classList.add('show');

function togglePreview(){
    if (previewBtn.classList.contains('active')){
        previewBtn.classList.add('desactive');
        previewBtn.classList.remove('active');
        previewContent.classList.add('hidden');
        previewContent.classList.remove('show');
    }else{
        previewBtn.classList.remove('desactive');
        previewBtn.classList.add('active');
        previewContent.classList.add('show');
        previewContent.classList.remove('hidden');
    }
}
 previewBtn.addEventListener('click',togglePreview);
