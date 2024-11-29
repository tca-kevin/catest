import { defineConfig } from "vite";
import { resolve } from 'path';
import fs from "fs";
import dotenv from "dotenv";

const env = dotenv.config().parsed;

const commonConfig = {
	build: {
		rollupOptions: {
			input: {
				script: resolve(__dirname, './src/app.js'),
				style: resolve(__dirname, './src/style.scss'),
			},
			output: {
				entryFileNames: 'app.js',
				assetFileNames: ({ names }) => {
					if (names && names.some(name => name.endsWith('.css'))) {
						return 'style.css';
					}

					return '[name].[ext]';
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
