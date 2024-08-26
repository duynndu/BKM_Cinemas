import { AxiosInstance } from "axios";
import { route as ziggyRoute } from "ziggy-js";
import { IOptionFileManager as IOption } from "@/types/option-file-manager.interface";
import { IMediaFileManager as IMedia } from "@/types/media-file-manager.interface";
import { FileManager } from "@/services/file-manager.service";

declare global {
  interface Window {
    axios: AxiosInstance;
    $: JQueryStatic;
    SetUrl: (items: IMedia[]) => any;
    FileManager: typeof FileManager;
  }
  interface JQuery {
    filemanager(type: string, options: IOption): any;
  }
  var route: typeof ziggyRoute;
}
