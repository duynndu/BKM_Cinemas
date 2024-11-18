import Alpine from "alpinejs";
import "../jquery-plugin/seatmanager.plugin";
import { IMovie } from "@/types/movie.interface";
import { movieService } from "@/services/movie.service";
import moment from "moment";
import { IGenre } from "@/types/genre";
import { IActor } from "@/types/actor.interfaces";
import { IShowtime } from "@/types/showtime.interface";
import { ICinema } from "@/types/cinema.interface";
import { cinemaService } from "@/services/cinema.service";

Alpine.data('MoviePageComponent', (identifier: string) => ({
  movie: {} as IMovie,
  moment: moment,
  genres: [] as IGenre[],
  actors: [] as IActor[],
  showtimes: [] as IShowtime[],
  showtimesMatrix: [[]] as IShowtime[][],
  cinemas: [] as ICinema[],
  async init() {
    this.cinemas = await cinemaService.getCinemas();
    console.log(this.cinemas);
    
    this.movie = await movieService.getMovie(identifier);
    this.genres = this.movie.movie_genre;
    this.actors = this.movie.actors;
    this.showtimes = this.movie.showtimes;

    let iRow = 0;
    this.showtimes.forEach((showtime, i) => {
      const date = moment(showtime.start_time).format('DD/MM/YYYY');
      if (this.showtimes[i + 1]?.start_time) {
        const nextDate = moment(this.showtimes[i + 1].start_time).format('DD/MM/YYYY');
        this.showtimesMatrix[iRow].push(showtime);
        if (date !== nextDate) {
          iRow++;
          this.showtimesMatrix[iRow] = [];
        }
      }
    })


    console.log(this.showtimesMatrix);


  }
}));