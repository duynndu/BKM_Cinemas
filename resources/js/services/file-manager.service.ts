import { IMediaFileManager as IMedia } from "@/types/media-file-manager.interface";
import $ from "jquery";
import axios from "axios";

export class FileManager {
  itemsStore: IMedia[] = [];
  inputEl?: JQuery;
  previewEl?: JQuery;
  constructor(selector: JQuery) {
    $(selector).filemanager("image", {
      onChange: ({ items, input, preview }) => {
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
        this.preview({ ...item, id: i }).on("click", ".close-icon", () =>
          this.deleteImage(item.id),
        ),
      );
    });
    this.inputEl
      ?.val(this.itemsStore.map((item) => item.url).join(","))
      .trigger("change");
  }
  preview(item: IMedia) {
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
}
