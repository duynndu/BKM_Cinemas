let roleInputs = {}; // Đối tượng lưu trữ vai trò

        function updateRoleBoxes() {
            const select = document.getElementById('selectActor');
            const selectedOptions = Array.from(select.selectedOptions);
            const roleBoxesContainer = document.getElementById('roleBoxes');

            // Tạo HTML cho các box vai trò
            const roleBoxesHTML = selectedOptions.map(option => {
                // Lấy vai trò đã nhập trước đó, nếu có
                const roleValue = roleInputs[option.value] || '';

                return `
            <div class="role-box">
                <label>Vai trò của ${option.text}: </label>
                <input class="form-control" type="text" name="role_actor_chooses[${option.value}]" value="${roleValue}" 
                       oninput="updateRoleInput('${option.value}', this.value)">
            </div>
        `;
            }).join('');

            // Cập nhật nội dung của div chứa các box
            roleBoxesContainer.innerHTML = roleBoxesHTML;
        }

        function updateRoleInput(actorId, value) {
            // Lưu vai trò vào đối tượng
            roleInputs[actorId] = value;
        }

        // Gọi hàm updateRoleBoxes để khởi tạo các ô vai trò khi trang được tải
        document.addEventListener('DOMContentLoaded', updateRoleBoxes);