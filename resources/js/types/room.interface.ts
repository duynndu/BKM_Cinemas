export interface IRoom {
  id?: number | null;
  room_name: string;
  image: any;
  base_price: number;
  col_count: number;
  row_count: number;
  seats: ISeat[] | null;
}