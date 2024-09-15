export interface Seat {
  type: string;
  slot: number;
  visible: boolean;
  seat_number: string;
  merged_seats: string[];
}

export interface SeatLayout {
  seats: Seat[];
  col_count: number;
  row_count: number;
}