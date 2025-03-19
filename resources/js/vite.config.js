import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'

// https://vite.dev/config/
export default defineConfig({
  plugins: [vue()],
  build: {
    outDir: '../../public/assets/js/vue-app',
    assetsDir: '',
    rollupOptions: {
      output: {
        entryFileNames: 'bundle.js',
        chunkFileNames: 'chunk-[name].js',
        assetFileNames: 'assets/[name].[ext]',
      }
    },
    base: './'
  },
  server: {
    proxy: {
      '/api': {
        target: 'http://localhost:88',
        changeOrigin: true,
      },
    },
  },
})
