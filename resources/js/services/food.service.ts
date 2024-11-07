import axios from "axios";
import { BaseService } from "./base.service";

class Food extends BaseService {
  //#region Food
  async getFoods() {
    const response = await axios.get('/foods');
    return response.data;
  }

  async getFood(id: string) {
    const response = await axios.get(`/foods/${id}`);
    return response.data;
  }

  async postFood(data: any) {
    const response = await axios.post('/foods', data);
    return response.data;
  }

  async putFood(id: string, data: any) {
    const response = await axios.put(`/foods/${id}`, data);
    return response.data;
  }

  async deleteFood(id: string) {
    const response = await axios.delete(`/foods/${id}`);
    return response.data;
  }
  //#endregion

  //#region Food Type
  async getFoodTypes() {
    const response = await axios.get('/food-types');
    return response.data;
  }

  async getFoodType(id: string) {
    const response = await axios.get(`/food-types/${id}`);
    return response.data;
  }

  async postFoodType(data: any) {
    const response = await axios.post('/food-types', data);
    return response.data;
  }

  async putFoodType(id: string, data: any) {
    const response = await axios.put(`/food-types/${id}`, data);
    return response.data;
  }

  async deleteFoodType(id: string) {
    const response = await axios.delete(`/food-types/${id}`);
    return response.data;
  }
  //#endregion
}

export const foodService: Food = Food.getInstance();