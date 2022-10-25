/** @type {import('rollup').RollupOptions} */
import { join, resolve } from 'path'
import { defineConfig } from 'vite'
import { RollupOptions } from 'rollup';
// import vue from '@vitejs/plugin-vue'
import laravel from 'vite-plugin-laravel'

export default defineConfig({
	build: {
		outDir: join(__dirname, 'dist'),
		lib: {
		  entry: resolve(__dirname, 'resources/js/arxiview.js'),
		  name: 'VuiKit',
		  fileName: (format) => `arxiview.${format}.js`
		},
		rollupOptions: {
			output: {
			  	assetFileNames: (assetInfo) => {
					if (assetInfo.name === 'style.css') return 'arxiview.css';
					return assetInfo.name;
				  },
			},
		}
	},
	plugins: [
		// laravel()
		// vue(),
	]
})