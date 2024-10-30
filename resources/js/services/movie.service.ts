import axios from "axios";
import { BaseService } from "./base.service";

class Movie extends BaseService {
  async getMovies() {
    const response = await axios.get('/movies');
    return response.data;
  }

  async getMovie(id: number) {
    const response = await axios.get(`/movies/${id}`);
    return response.data;
  }

  async postMovie(data: FormData) {
    const response = await axios.post('/movies', data, {
      headers: {
        'Content-Type': 'multipart/form-data'
      }
    });
    return response.data;
  }

  async putMovie(id: number, data: FormData) {
    const response = await axios.put(`/movies/${id}`, data, {
      headers: {
        'Content-Type': 'multipart/form-data'
      }
    });
    return response.data;
  }

  async deleteMovie(id: number) {
    const response = await axios.delete(`/movies/${id}`);
    return response.data;
  }
}

export const movieService: Movie = Movie.getInstance();