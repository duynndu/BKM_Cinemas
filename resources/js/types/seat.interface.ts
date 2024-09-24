interface ISeat {
  id?: number | null;
  room_id?: number | null;
  seat_number: any;
  price?: number;
  type: string;
  slot: number;
  visible: any;
  merged_seats?: number[] | null;
  order: any;
}