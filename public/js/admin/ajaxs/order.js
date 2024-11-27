import Echo from "laravel-echo"

window.Pusher = require('pusher-js');

const echo = new Echo({
    broadcaster: 'pusher',
    key: process.env.VITE_PUSHER_APP_KEY,  // Sử dụng key từ .env
    cluster: process.env.VITE_PUSHER_APP_CLUSTER,      // Sử dụng cluster từ .env
    forceTLS: true,
    encrypted: true,
    wsHost: process.env.PUSHER_HOST,
    wsPort: process.env.PUSHER_PORT,  // Cấu hình port Pusher từ .env
    disableStats: true,  // Tắt thống kê không cần thiết
    enabledTransports: ['ws', 'wss'],  // Cho phép các giao thức WebSocket
});
