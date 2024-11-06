CKEDITOR.editorConfig = function (config) {
    var csrfToken = $('meta[name="csrf-token"]').attr("content");
    // Thiết lập các nhóm thanh công cụ, tối ưu hóa cho hai hàng thanh công cụ.
    config.toolbarGroups = [
        { name: "clipboard", groups: ["clipboard", "undo"] },
        // { name: "editing", groups: ["find", "selection", "spellchecker"] },
        { name: "links" },
        { name: "insert" },
        { name: "forms" },
        { name: "tools" },
        // { name: "others" },
        "/",
        { name: "basicstyles", groups: ["basicstyles"] },
        {
            name: "paragraph",
            groups: ["list", "indent", "align", "bidi"],
        },
        { name: "styles" },
        { name: "colors" },
    ];

    // Cho phép tất cả nội dung bao gồm cả thẻ iframe
    config.allowedContent = true;

    // Loại bỏ một số nút mà các plugin chuẩn cung cấp, không cần thiết trên thanh công cụ chuẩn
    config.removeButtons = "SpellChecker,Smiley,Underline,Subscript,Superscript,Maximize,Language,HorizontalRule,SpecialChar,Anchor,Styles,About,Select,Format,Checkbox,Radio,TextField,Textarea,HiddenField,ShowBlocks";

    // Định dạng các thẻ khối phổ biến nhất.
    config.format_tags = "p;h1;h2;h3;h4;h5;h6;pre";

    // Đơn giản hóa cửa sổ hộp thoại.
    config.removeDialogTabs = "image:advanced;link:advanced";

    // File browser URLs
    config.filebrowserImageBrowseUrl = "/file-manager?type=Images";
    config.filebrowserBrowseUrl = "/file-manager?type=Files";
    config.filebrowserUploadUrl = "/file-manager/upload?type=Files&_token=" + csrfToken;
    config.filebrowserImageUploadUrl = "/file-manager/upload?type=Images&_token=" + csrfToken;

    // Nhãn mặc định cho kích thước phông chữ
    config.fontSize_defaultLabel = "14px";

    // Vô hiệu hóa tự động bao thẻ đoạn
    // Đảm bảo rằng cấu hình không ghi đè lên cấu hình hiện tại
    config.autoParagraph = false;

    // Mở rộng cấu hình allowedContent mà không ghi đè
    config.allowedContent = config.allowedContent || {};
    config.allowedContent.iframe = {
        attributes: "src,width,height,name,align,sandbox",
        classes: true,
        styles: true,
    };

    // Thêm thuộc tính sandbox mà không làm gián đoạn các plugin khác
    CKEDITOR.on("instanceReady", function (ev) {
        ev.editor.dataProcessor.htmlFilter.addRules({
            elements: {
                iframe: function (element) {
                    // Chỉ thêm thuộc tính 'sandbox' nếu nó chưa có
                    if (!element.attributes.sandbox) {
                        element.attributes.sandbox = "allow-scripts allow-same-origin";
                    }
                },
            },
        });
    });
};
