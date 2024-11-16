import axios from "axios";
import { BaseService } from "./base.service";
import { IUser } from "@/types/user.interface";

class Auth extends BaseService {
  async getCurrentUser() {
    const response = await axios.get<IUser | null>('/user');
    return response.data;
  }
}

export const authService: Auth = Auth.getInstance();