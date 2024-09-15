import { AxiosInstance } from "axios";
import { route as ziggyRoute } from "ziggy-js";
import { IOptionFileManager as IOption } from "@/types/option-file-manager.interface";
import { IMediaFileManager as IMedia } from "@/types/media-file-manager.interface";
import { FileManager } from "@/services/file-manager.service";
import Alpine from "alpinejs";
import { utils } from "@/utils/common";

declare global {
  interface Window {
    axios: AxiosInstance;
    $: JQueryStatic;
    SetUrl: (items: IMedia[]) => any;
    FileManager: typeof FileManager;
    Alpine: typeof Alpine;
    utils: typeof utils;
  }
  interface JQuery {
    filemanager(type: string, options: IOption): any;
    seatmanager(seatLayout: any, options: any): any;
  }
  var route: typeof ziggyRoute;
}
