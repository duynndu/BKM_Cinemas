import { IRoom } from "@/types/room.interface";
import { ISeatType } from "@/types/seat-type.interface";

export class RoomService {

  //#region SeatLayout
  static async getSeatLayouts() {
    const response = await window.axios.get('/seat-layouts');
    return response.data;
  }

  static async postSeatLayout(data: any) {
    const response = await window.axios.post('/seat-layouts', data, {
      headers: {
        'Content-Type': 'multipart/form-data'
      }
    });
    return response.data;
  }

  static async putSeatLayout(id: number, data: ISeatType) {
    const response = await window.axios.put(`/seat-layouts/${id}`, data, {
      headers: {
        'Content-Type': 'multipart/form-data'
      }
    });
    return response.data;
  }

  static async deleteSeatLayout(id: number) {
    const response = await window.axios.delete(`/seat-layouts/${id}`, {
      headers: {
        'Content-Type': 'multipart/form-data'
      }
    });
    return response.data;
  }
  //#endregion

  //#region Room
  static async getRooms() {
    const response = await window.axios.get('/rooms');
    return response.data;
  }

  static async getRoom(id: number) {
    const response = await window.axios.get<IRoom>(`/rooms/${id}`);
    return response.data;
  }

  static async postRoom(data: any) {
    const response = await window.axios.post('/rooms', data, {
      headers: {
        'Content-Type': 'multipart/form-data'
      }
    });
    return response.data;
  }

  static async putRoom(id: number, data: any) {
    const response = await window.axios.put(`/rooms/${id}`, data, {
      headers: {
        'Content-Type': 'multipart/form-data'
      }
    });
    return response.data;
  }

  static async deleteRoom(id: number) {
    const response = await window.axios.delete(`/rooms/${id}`);
    return response.data;
  }
  //#endregion

  //#region SeatType
  static async getSeatTypes() {
    const response = await window.axios.get<ISeatType[]>('/seat-types');
    return response.data;
  }

  static async getSeatType(id: number) {
    const response = await window.axios.get<ISeatType>(`/seat-types/${id}`);
    return response.data;
  }

  static async postSeatType(data: ISeatType) {
    const response = await window.axios.post<ISeatType>('/seat-types', data);
    return response.data;
  }

  static async putSeatType(id: number, data: ISeatType) {
    const response = await window.axios.put<ISeatType>(`/seat-types/${id}`, data);
    return response.data;
  }


  static async deleteSeatType(id: number) {
    const response = await window.axios.delete(`/seat-types/${id}`);
    return response.data;
  }

  static async getSeatTypesKeyByCode() {
    const response = await window.axios.get('/seat-types-key-by-code');
    return response.data;
  }
  //#endregion
}
