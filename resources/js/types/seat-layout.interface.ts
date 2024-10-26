import { ISeat } from "./seat.interface";


export interface ISeatLayout {
  id?: number | null;
  name: string;
  image: string;
  col_count: number;
  row_count: number;
  seats: ISeat[] | null;
}