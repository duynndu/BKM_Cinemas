import { SEAT_STATUS } from "@/define/seat.define";

export interface ISeat {
  id?: string | null;
  room_id?: number | null;
  seat_number: any;
  price?: number;
  type: string;
  slot: number;
  visible: any;
  merged_seats?: number[] | null;
  order: number;
  selected?: boolean;
  status?: SEAT_STATUS_VALUES;
}

export type SEAT_STATUS_VALUES =
  | typeof SEAT_STATUS.AVAILABLE
  | typeof SEAT_STATUS.SELECTED
  | typeof SEAT_STATUS.OCCUPIED
  | typeof SEAT_STATUS.RESERVED
