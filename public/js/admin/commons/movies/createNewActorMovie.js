function addActor() {
    const actorList = document.getElementById('actor-list');
    const newRow = document.querySelector('.actor-row').cloneNode(true);

    // Clear the values in the cloned row
    newRow.querySelectorAll('input').forEach(input => {
        input.value = '';
    });

    // Thêm nút xóa cho hàng mới
    const deleteButton = document.createElement('a');
    deleteButton.className = 'btn btn-danger del-actor';
    deleteButton.innerText = 'Xóa';
    deleteButton.onclick = deleteActor;
    deleteButton.style.cssText = 'display:block; position:absolute; bottom:0;'; // Thêm style nếu cần

    const deleteCol = newRow.querySelector('.col-1');
    deleteCol.innerHTML = ''; // Xóa nội dung cũ
    deleteCol.appendChild(deleteButton); // Thêm nút xóa vào hàng mới

    actorList.appendChild(newRow);
}

function deleteActor(event) {
    event.preventDefault(); // Ngăn chặn hành động mặc định của thẻ <a>
    const actorRow = event.target.closest('.actor-row'); // Tìm hàng cha
    if (actorRow) {
        actorRow.remove(); // Xóa hàng
    }
}