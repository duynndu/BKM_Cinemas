import { IMovie } from "./movie.interface";
import { IRoom } from "./room.interface";

export interface IShowtime {
  id?: string;
  movie_id: string | null;
  room_id: string | null;
  start_time: string;
  end_time: string;
  created_at?: string;
  updated_at?: string;
  deleted_at?: string;

  movie?: IMovie | null;
  room?: IRoom | null;
}
