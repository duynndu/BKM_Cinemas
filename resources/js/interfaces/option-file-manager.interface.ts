import { IMediaFileManager as IMedia } from "@/interfaces/media-file-manager.interface";

export interface IOptionFileManager {
  prefix: string;
  input: JQuery;
  preview: JQuery;
  onChange: ({
    items,
    input,
    preview,
  }: {
    items: IMedia[];
    input: JQuery;
    preview: JQuery;
  }) => any;
}
