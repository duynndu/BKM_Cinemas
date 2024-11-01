

export interface ISeatLayout {
  id?: string | null;
  name: string;
  image: string;
  col_count: number;
  row_count: number;
  seats: ISeat[] | null;
}