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

  static async putSeatLayout(id: number, data: FormData) {
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

  static async postRoom(data: any) {
    const response = await window.axios.post('/rooms', data);
    return response.data;
  }

  static async putRoom(id: number, data: any) {
    const response = await window.axios.put(`/rooms/${id}`, data);
    return response.data;
  }

  static async deleteRoom(id: number) {
    const response = await window.axios.delete(`/rooms/${id}`);
    return response.data;
  }
  //#endregion
}
