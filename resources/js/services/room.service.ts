import { IRoom } from "@/types/room.interface";
import { ISeatType } from "@/types/seat-type.interface";
import { BaseService } from "./base.service";
import axios from "axios";

export class Room extends BaseService {

  //#region SeatLayout
  async getSeatLayouts() {
    const response = await axios.get('/seat-layouts');
    return response.data;
  }

  async postSeatLayout(data: any) {
    const response = await axios.post('/seat-layouts', data, {
      headers: {
        'Content-Type': 'multipart/form-data'
      }
    });
    return response.data;
  }

  async putSeatLayout(id: number, data: FormData) {
    const response = await axios.put(`/seat-layouts/${id}`, data, {
      headers: {
        'Content-Type': 'multipart/form-data'
      }
    });
    return response.data;
  }

  async deleteSeatLayout(id: number) {
    const response = await axios.delete(`/seat-layouts/${id}`, {
      headers: {
        'Content-Type': 'multipart/form-data'
      }
    });
    return response.data;
  }
  //#endregion

  //#region Room
  async getRooms() {
    const response = await axios.get('/rooms');
    return response.data;
  }

  async getRoom(id: string) {
    const response = await axios.get<IRoom>(`/rooms/${id}`);
    return response.data;
  }

  async postRoom(data: any) {
    const response = await axios.post('/rooms', data, {
      headers: {
        'Content-Type': 'multipart/form-data'
      }
    });
    return response.data;
  }

  async putRoom(id: string, data: any) {
    const response = await axios.put(`/rooms/${id}`, data, {
      headers: {
        'Content-Type': 'multipart/form-data'
      }
    });
    return response.data;
  }

  async deleteRoom(id: number) {
    const response = await axios.delete(`/rooms/${id}`);
    return response.data;
  }
  //#endregion

  //#region SeatType
  async getSeatTypes() {
    const response = await axios.get<ISeatType[]>('/seat-types');
    return response.data;
  }

  async getSeatType(id: number) {
    const response = await axios.get<ISeatType>(`/seat-types/${id}`);
    return response.data;
  }

  async postSeatType(data: ISeatType) {
    const response = await axios.post<ISeatType>('/seat-types', data);
    return response.data;
  }

  async putSeatType(id: number, data: ISeatType) {
    const response = await axios.put<ISeatType>(`/seat-types/${id}`, data);
    return response.data;
  }


  async deleteSeatType(id: number) {
    const response = await axios.delete(`/seat-types/${id}`);
    return response.data;
  }

  async getSeatTypesKeyByCode() {
    const response = await axios.get('/seat-types-key-by-code');
    return response.data;
  }
  //#endregion
}

export const roomService: Room = Room.getInstance();