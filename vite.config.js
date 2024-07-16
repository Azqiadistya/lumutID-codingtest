// vite.config.js
import { defineConfig } from 'vite';
import { resolve } from 'path';

export default defineConfig({
    build: {
        outDir: resolve(__dirname, 'public/build'),
        manifest: true,
        rollupOptions: {
            input: {
                main: resolve(__dirname, 'resources/js/app.js'),
            },
        },
    },
});
