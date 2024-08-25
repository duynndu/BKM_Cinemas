/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from "axios";
import $ from "jquery";
import { IMediaFileManager as IMedia } from "@/interfaces/media-file-manager.interface";
import { IOptionFileManager as IOption } from "@/interfaces/option-file-manager.interface";

window.axios = axios;
//@ts-ignore
window.$ = $;
//@ts-ignore
window.jQuery = $;

(function () {
  //@ts-ignore
  $.fn.filemanager = function (type: string, options: IOption) {
    type = type || "file";

    this.on("click", function () {
      const route_prefix = options?.prefix ? options.prefix : "/filemanager";

      const input = $("#" + $(this).data("input"));
      const preview = $("#" + $(this).data("preview"));
      window.open(
        route_prefix + "?type=" + type,
        "FileManager",
        "width=900,height=600",
      );
      //@ts-ignore
      window.SetUrl = function (items: Media[]) {
        if (options?.onChange) {
          options?.onChange?.({ items, input, preview });
        } else {
          const file_path = items.map((item: IMedia) => item.url).join(",");
          input.val("").val(file_path).trigger("change");
          preview.html("");
          items.forEach(function (item: IMedia) {
            preview.append(
              $(`<img src="${item.thumb_url}" alt="${item.name}">`),
            );
          });
        }
        preview.trigger("change");
      };
      return false;
    });
  };
})();
//@ts-ignore
window.FileManager = class FileManager {
  itemsStore: IMedia[] = [];
  inputEl?: JQuery;
  previewEl?: JQuery;
  constructor(selector: JQuery) {
    //@ts-ignore
    $(selector).filemanager("image", {
      onChange: ({
        items,
        input,
        preview,
      }: {
        items: IMedia[];
        input: JQuery;
        preview: JQuery;
      }) => {
        this.itemsStore = [...this.itemsStore, ...items];
        this.inputEl = input;
        this.previewEl = preview;
        this.renderCardImages();
      },
    });
  }

  renderCardImages() {
    this.previewEl?.html("");
    this.itemsStore.forEach((item, i) => {
      this.previewEl?.append(
        this.cardImage({ ...item, id: i }).on("click", ".close-icon", () =>
          this.deleteImage(item.id),
        ),
      );
    });
    this.inputEl
      ?.val(this.itemsStore.map((item) => item.url).join(","))
      .trigger("change");
  }
  cardImage(item: IMedia) {
    return $(`
      <div class="card-image relative w-24 h-24 bg-gray-100 rounded-md overflow-hidden border-2 rounded-2">
        <img src="${item.thumb_url}" alt="" class="w-full h-full object-cover">
        <div class="close-icon absolute top-2 right-2 text-gray-500 hover:text-gray-800">
          <i class="fa-regular fa-trash-can"></i>
        </div>
      </div>
    `);
  }
  deleteImage(id: number) {
    this.itemsStore.splice(id, 1);
    this.renderCardImages();
  }
};

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// import Pusher from 'pusher-js';
// window.Pusher = Pusher;

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: import.meta.env.VITE_PUSHER_APP_KEY,
//     cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER ?? 'mt1',
//     wsHost: import.meta.env.VITE_PUSHER_HOST ? import.meta.env.VITE_PUSHER_HOST : `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
//     wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
//     wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
//     forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? 'https') === 'https',
//     enabledTransports: ['ws', 'wss'],
// });
