import { AxiosInstance } from "axios";
import { route as ziggyRoute } from "ziggy-js";
import { IOptionFileManager as IOption } from "@/types/option-file-manager.interface";
import { IMediaFileManager as IMedia } from "@/types/media-file-manager.interface";
import Alpine from "alpinejs";
import * as utils from "@/utils/common";
import Services from "@/services";

declare global {
  interface Window {
    axios: AxiosInstance;
    $: JQueryStatic;
    SetUrl: (items: IMedia[]) => any;
    Services: typeof Services;
    Alpine: typeof Alpine;
    utils: typeof utils;
  }
  interface JQuery {
    filemanager(type: string, options: IOption): any;
    seatmanager(seatLayout: any, options: any): any;
  }
  var route: typeof ziggyRoute;
  var toastr: Toastr;
}
