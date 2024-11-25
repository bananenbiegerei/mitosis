const primaryShades = {
	50: '#fceae7',
	100: '#f8d0c8',
	200: '#f1a899',
	300: '#e97f6a',
	400: '#e2563b',
	500: '#d95d44', // Base color
	600: '#c2543d',
	700: '#a94a34',
	800: '#8f3f2b',
	900: '#753422',
	DEFAULT: '#d95d44', // Base color
};
const secondaryShades = {
	50: '#f5f6fb',
	100: '#e6e8f5',
	200: '#cdd1eb',
	300: '#b3b9e0',
	400: '#9aa2d6',
	500: '#8388B6', // Base color
	600: '#6b6f9e',
	700: '#545686',
	800: '#3c3e6e',
	900: '#242656',
	DEFAULT: '#8388B6', // Base color
};
const tertiaryShades = {
	50: '#f9eef9',
	100: '#f2d6f2',
	200: '#e5b0e5',
	300: '#d88ad8',
	400: '#cb64cb',
	500: '#C089BB', // Base color
	600: '#a05fa0',
	700: '#804780',
	800: '#603060',
	900: '#401940',
	DEFAULT: '#C089BB', // Base color
};
const neutralShades = {
	50: '#f9f9f9',
	100: '#f2f2f2',
	200: '#e6e6e6',
	300: '#d9d9d9',
	400: '#cccccc',
	500: '#cfcfcf', // Base color
	600: '#b3b3b3',
	700: '#999999',
	800: '#7f7f7f',
	900: '#666666',
	DEFAULT: '#cfcfcf', // Base color
};
const successShades = {
	50: '#e6f4ec',
	100: '#cce9d9',
	200: '#99d3b3',
	300: '#66bd8d',
	400: '#33a767',
	500: '#75B996', // Base color
	600: '#2a8a3b',
	700: '#20702e',
	800: '#155621',
	900: '#0b3c14',
	DEFAULT: '#75B996', // Base color
};
const warningShades = {
	50: '#fdf4e6',
	100: '#fbe9cc',
	200: '#f7d399',
	300: '#f3bd66',
	400: '#efa733',
	500: '#E3BA58', // Base color
	600: '#e58a00',
	700: '#b36c00',
	800: '#804d00',
	900: '#4d2e00',
	DEFAULT: '#E3BA58', // Base color
};

module.exports = {
	content: ['./**/*.php'],
	safelist: [
		{
		  pattern: /^(bg|text|border)-(primary|secondary|tertiary)-(50|100|200|300|400|500|600|700|800|900|DEFAULT)$/,
		},
	],
	theme: {
		// Helper pixel to rem calc: https://nekocalc.com/de/px-zu-rem-umrechner
		extend: {
			fontSize: {
				xs: '0.625rem', // 10px
				sm: '0.875rem', // 14px
				base: '1rem', // 16px
				lg: '1.25rem', // 20px
				xl: '1.5rem', // 24px
				'2xl': '2rem', // 32px
				'3xl': '2.8125rem', // 45px (2.8125rem = 45px / 16)
				'4xl': '3.75rem', // 60px
				'5xl': '5rem', // 80px (5rem = 80px / 16)
			},
			fontFamily: {
				sans: ['Arial', 'sans-serif'],
				//mono: ['Roboto Mono', 'serif'],
				//serif: ['Roboto Serif', 'serif'],
			},
			fontWeight: {
				light: 200,
				normal: 300,
				medium: 400,
				bold: 500,
			},
			height: {
				'home-swiper': 'calc(100vh - 4rem)',
			},
			width: {
				'home-text-cards-container': 'calc(100vw - 8rem)',
			},
		},
	},
	corePlugins: {
		aspectRatio: false,
	},
	plugins: [
		require('@tailwindcss/aspect-ratio'),
		require('@tailwindcss/forms'),
		require('tailwindcss-themer')({
			defaultTheme: {
				extend: {
					colors: {
						black: {
							DEFAULT: '#212121',
						},
						white: {
							DEFAULT: '#F7F7F7',
						},
						primary: primaryShades,
						error: primaryShades,
						accent: primaryShades,
						focus: primaryShades,
						secondary: secondaryShades,
						tertiary: tertiaryShades,
						neutral: neutralShades,
						success: successShades,
						warning: warningShades,
					},
				},
			},
			// themes: [
			// 	{
			// 		name: 'primary',
			// 		extend: {
			// 			colors: {
			// 				palerose: {
			// 					DEFAULT: '#FBC5B4',
			// 				},
			// 				palepurple: {
			// 					DEFAULT: '#E0D3FF',
			// 				},
			// 				palepeach: {
			// 					DEFAULT: '#FADAB6',
			// 				},
			// 				palecyan: {
			// 					DEFAULT: '#D4E9DE',
			// 				},
			// 				palepink: {
			// 					DEFAULT: '#F7DAEF',
			// 				},
			// 				paleblue: {
			// 					DEFAULT: '#C0D8F4',
			// 				},
			// 				palegreen: {
			// 					DEFAULT: '#E3F9D6',
			// 				},
			// 				default: {
			// 					DEFAULT: '#d5d2d7',
			// 				},
			// 			},
			// 		},
			// 	},
			// 	{
			// 		name: 'secondary',
			// 		extend: {
			// 			colors: {
			// 				red: {
			// 					DEFAULT: '#D04425',
			// 				},
			// 				cyan: {
			// 					DEFAULT: '#00B9FF',
			// 				},
			// 				blue: {
			// 					DEFAULT: '#3A25FF',
			// 					200: '#EEEAFF',
			// 				},
			// 				black: {
			// 					DEFAULT: '#000',
			// 				},
			// 			},
			// 		},
			// 	},
			// ],
		}),
	],
};
