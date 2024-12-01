import { defineConfig } from "vite";
import { resolve } from 'path';
import fs from "fs";
import dotenv from "dotenv";

const env = dotenv.config().parsed;

const commonConfig = {
	base: './',
	build: {
		rollupOptions: {
			input: {
				'dist/assets/js/app': resolve(__dirname, 'src/js/app.js'),
				'dist/assets/js/style': resolve(__dirname, 'src/js/style.js'),
				'style': resolve(__dirname, 'src/sass/style.scss'),
				'app': resolve(__dirname, 'src/sass/app.scss'),
			},
			output: {
				entryFileNames: () => {
					return '[name].js';
				},
				chunkFileNames: () => {
					return '[name].js';
				},
				assetFileNames: (assetInfo) => {
					if (assetInfo.name === 'style.css') {
						return '[name][extname]';
					}

					if (assetInfo.name.endsWith('.css')) {
						return 'dist/assets/css/[name][extname]';
					}

					if (/\.(eot|woff|woff2)$/.test(assetInfo.name)) {
						return 'dist/assets/fonts/[name][extname]';
					}

					return 'dist/[name][extname]';
				},
				dir: resolve(__dirname, '.'),
			},
		},
	},
	css: {
		preprocessorOptions: {
			scss: {},
		},
	},
};

let config = {};

config = {
	...commonConfig,
};

if (env?.DEV_ENV === "docker") {
	config = {
		server: {
			host: "0.0.0.0",
			protocol: 'wss', // Use 'wss' if HTTPS
			port: 5173,
			hmr: {
				host: env?.APP_HOST,
			},
			https: {
				key: fs.readFileSync(`${env.APP_KEY_DIR}`),
				cert: fs.readFileSync(`${env.APP_CERT_DIR}`),
			},
			watch: {
				usePolling: true,
			},
		},
		...commonConfig,
	};
} else if (env?.DEV_ENV === "valet") {
	config = {
		server: {
			host: "127.0.0.1",
			protocol: 'wss', // Use 'wss' if HTTPS
			port: 5173,
			hmr: {
				host: env?.APP_HOST,
			},
			https: {
				key: fs.readFileSync(`${env.APP_KEY_DIR}`),
				cert: fs.readFileSync(`${env.APP_CERT_DIR}`),
			},
			watch: {
				usePolling: true,
			},
		},
		...commonConfig,
	};
} else {
	config = {
		...commonConfig,
	};
}

export default defineConfig(config);
