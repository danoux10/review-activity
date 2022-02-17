// anchor show/hidden form icon_add
var toggleAdd = document.getElementById('showAddIcon');
var viewAdd = document.getElementById('iconFormAdd');


function toggleViewAdd(){
    if (toggleAdd.classList.contains('empty')){
        toggleAdd.classList.add('active');
        toggleAdd.classList.remove('empty');
        viewAdd.classList.add('hidden');
    }else{
        toggleAdd.classList.remove('active');
        toggleAdd.classList.add('empty');
        viewAdd.classList.remove('hidden');
    }
}

toggleAdd.addEventListener('click',toggleViewAdd);