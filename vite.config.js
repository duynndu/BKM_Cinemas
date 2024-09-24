import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import { exec } from "child_process";

export default defineConfig({
  plugins: [
    laravel({
      input: ["resources/css/app.css", "resources/js/app.js"],
      refresh: true,
    }),
    {
      handleHotUpdate({ file, server }) {
        if (
          file.includes("routes/") ||
          file.includes("resources/views/") ||
          file.includes("config/")
        ) {
          exec("php artisan optimize && php artisan ziggy:generate", (error, stdout, stderr) => {
            if (error) {
              console.error(`exec error: ${error}`);
              return;
            }
            console.log(`All caches cleared: ${stdout}`);
          });
        }
      },
    },
  ],
});
